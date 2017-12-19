<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Nietzscheson\Admovil\Admovil;
use Nietzscheson\Admovil\Voucher;
use Nietzscheson\Admovil\Credential;
use Nietzscheson\Admovil\Payment;
use Nietzscheson\Admovil\Businessname;
use Nietzscheson\Admovil\Address;
use Nietzscheson\Admovil\VoucherException;

class FeatureContext implements Context
{
    /**
     * @var Admovil
     */
    private $admovil;

    /**
     * @var Voucher
     */
    private $voucher;

    /**
     * @var Payment
     */
    private $payment;

    /**
     * @var Businessname
     */
    private $businessname;

    /**
     * @var Address
     */
    private $address;

    public function __construct()
    {
        $this->admovil = new Admovil();
        $this->voucher = new Voucher();
        $this->payment = new Payment();
        $this->businessname = new Businessname();
        $this->businessname = new Businessname();
        $this->address = new Address();
    }

    /**
     * @Given I am Connect with:
     */
    public function iAmConnectWith(TableNode $table)
    {
        $credentials = new Credential();

        foreach($table as $item){
            $credentials->setUser($item['user']);
            $credentials->setPassword($item['password']);
            $credentials->setBusinessId($item['businessId']);
            $credentials->setSystemId($item['systemId']);
            $credentials->setRfc($item['rfc']);
        }

        $this->admovil->setCredential($credentials);
    }

    /**
     * @Given I am set the Voucher as:
     */
    public function iAmSetTheBillingTypeAs(TableNode $table)
    {

        foreach($table as $item){
            $this->voucher->setBillingType($item['billingType']);
            $this->voucher->setVoucherType($item['voucherType']);
            $this->voucher->setBranchOffice($item['branchoffice']);
            $this->voucher->setNotes($item['notes']);
            $this->voucher->setCurrency($item['currency']);
            $this->voucher->setExchangeRate($item['exchangeRate']);
            $this->voucher->setCfdiUse($item['cfdiUse']);
            $this->voucher->setConfirmation($item['confirmation']);
        }
    }

    /**
     * @Given I am set the VoucherType as :voucherType
     */
    public function iAmSetTheVoucherTypeAs($voucherType)
    {
        $this->voucher->setVoucherType($voucherType);
    }

    /**
     * @Given I am set the BranchOffice as :branchOfficce
     */
    public function iAmSetTheBranchOfficeAs($branchOfficce)
    {
        $this->voucher->setBranchOffice($branchOfficce);
    }

    /**
     * @Given I am set the Payment as:
     */
    public function iAmSetThePaymentAs(TableNode $table)
    {
        foreach($table as $item){
            $this->payment->setAccount($item['account']);
            $this->payment->setCondition($item['condition']);
            $this->payment->setForm($item['form']);
            $this->payment->setMethod($item['method']);
        }

        $this->voucher->setPayment($this->payment);
    }

    /**
     * @Given I am set the Businessname as:
     */
    public function iAmSetTheBusinessnameAs(TableNode $table)
    {
        foreach($table as $item){
            $this->businessname->setId($item['id']);
            $this->businessname->setName($item['name']);
            $this->businessname->setRFC($item['rfc']);
            $this->businessname->setTaxId($item['taxId']);
            $this->businessname->setReference($item['reference']);
            $this->businessname->setEmail($item['email']);
        }

        $this->voucher->setBusinessName($this->businessname);
    }

    /**
     * @Given I am set the Address as:
     */
    public function iAmSetTheAddressAs(TableNode $table)
    {
        foreach($table as $item){
            $this->address->setStreet($item['street']);
            $this->address->setCodePostal($item['codePostal']);
            $this->address->setState($item['state']);
            $this->address->setCity($item['city']);
            $this->address->setTown($item['town']);
            $this->address->setNeighborhood($item['neighborhood']);
            $this->address->setExteriorNumber($item['exteriorNumber']);
            $this->address->setInteriorNumber($item['interiorNumber']);
            $this->address->setTelephone($item['telephone']);
            $this->address->setFiscalResidency($item['fiscalResidency']);
        }

        $this->businessname->setAddress($this->address);
    }

    /**
     * @Given I get a Voucher
     */
    public function iGetAVoucher()
    {
        try{
            echo "The voucher is: " . $this->admovil->voucher($this->voucher)->getVoucher();
        }catch (VoucherException $e){
            echo $e->getMessage();
        }
    }
}
