<?php

use Behat\Gherkin\Node\TableNode;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIFactory;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIDataFactory;
use Nietzscheson\Admovil\CFDI\CFDIInterface;
use Nietzscheson\Admovil\CFDI\CFDIData\CFDIDataInterface;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\PaymentFactory;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\Businessname\BusinessnameFactory;
use Nietzscheson\Admovil\CFDI\CFDIData\Businessname\BusinessnameInterface;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\Businessname\AddressFactory;
use Nietzscheson\Admovil\CFDI\CFDIResult;
use Nietzscheson\Admovil\Exception\CFDIException;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIDetailData\CFDIDetailDataFactory;
use Nietzscheson\Admovil\Collection\Items;
use Nietzscheson\Admovil\CFDI\CFDIDetailInterface;
use Nietzscheson\Admovil\CFDI\CFDIDetail;
use Nietzscheson\Admovil\CFDI\CFDICheckInInterface;
use Nietzscheson\Admovil\CFDI\CFDICheckIn;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDICheckInFactory;
use Nietzscheson\Admovil\Exception\CFDICheckinException;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\CredentialFactory;

class FeatureContext extends AbstractFeatureContext
{
    /**
     * @var CFDIInterface
     */
    private $cfdi;

    /**
     * @var CFDIDetailInterface
     */
    private $cfdiDetail;

    /**
     * @var CFDICheckInInterface
     */
    private $cfdiCheckIn;

    /**
     * @var CFDIDataInterface
     */
    private $voucher;

    /**
     * @var BusinessnameInterface
     */
    private $businessname;

    /**
     * @var Items
     */
    private $items;

    /**
     * @var CFDIResult
     */
    private $voucherResult;

    public function __construct()
    {
        $this->voucherResult = new CFDIResult();
        $this->items = new Items();
        $this->cfdiDetail = new CFDIDetail();
        $this->cfdiCheckIn = new CFDICheckIn();
    }

    /**
     * @Given I am Connect with Admovil Service
     */
    public function iAmConnectWithAdmovilService()
    {
        $this->cfdi = CFDIFactory::create();
    }

    /**
     * @Given I am set the Voucher as:
     */
    public function iAmSetTheVoucherAs(TableNode $table)
    {
        $this->voucher = CFDIDataFactory::create($this->singleItemsTable($table));
    }

    /**
     * @Given I am set the Payment as:
     */
    public function iAmSetThePaymentAs(TableNode $table)
    {
        $this->voucher->setPayment(PaymentFactory::create($this->singleItemsTable($table)));
    }

    /**
     * @Given I am set the Businessname as:
     */
    public function iAmSetTheBusinessnameAs(TableNode $table)
    {
        $this->businessname = BusinessnameFactory::create($this->singleItemsTable($table));

        $this->voucher->setBusinessName($this->businessname);
    }

    /**
     * @Given I am set the Address as:
     */
    public function iAmSetTheAddressAs(TableNode $table)
    {
        $this->businessname->setAddress(AddressFactory::create($this->singleItemsTable($table)));
    }

    /**
     * @Given I get a Voucher
     */
    public function iGetAVoucher()
    {
        try{

            $this->voucherResult->setVoucher($this->cfdi->execute($this->voucher)->getVoucher());

            echo "The voucher is: " . $this->voucherResult->getVoucher();
        }catch (CFDIException $e){
            echo $e->getMessage();
        }
    }

    /**
     * @Given I set the Invoice Details as:
     */
    public function iSetTheInvoiceDetails(TableNode $table)
    {

        $item = CFDIDetailDataFactory::create($this->singleItemsTable($table));

        $this->items->addItem($item);

        $this->cfdiDetail->execute($this->items, $this->voucherResult);

    }

    /**
     * @Given I want to Bill
     */
    public function iWantToBill()
    {

        try{

            $credential = CredentialFactory::create();

            $cfdiCheckin = CFDICheckInFactory::create()->execute($this->voucherResult, $credential);

        }catch (CFDICheckinException $e){
            echo $e->getMessage();
            exit;
        }

        echo "Voucher: " . $cfdiCheckin->getVoucher() . " UUID: " . $cfdiCheckin->getUUID();
    }
}