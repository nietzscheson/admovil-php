<?php

use Behat\Gherkin\Node\TableNode;
use Nietzscheson\Admovil\Fixture\Factory\CFDIFactory;
use Nietzscheson\Admovil\Fixture\Factory\VoucherFactory;
use Nietzscheson\Admovil\CFDI\CFDIInterface;
use Nietzscheson\Admovil\Voucher\VoucherInterface;
use Nietzscheson\Admovil\Fixture\Factory\PaymentFactory;
use Nietzscheson\Admovil\Fixture\Factory\BusinessnameFactory;
use Nietzscheson\Admovil\Voucher\Businessname\BusinessnameInterface;
use Nietzscheson\Admovil\Fixture\Factory\AddressFactory;
use Nietzscheson\Admovil\Voucher\VoucherResult;
use Nietzscheson\Admovil\Voucher\VoucherException;
use Nietzscheson\Admovil\Voucher\Payment\PaymentInterface;
use Nietzscheson\Admovil\Voucher\Businessname\AddressInterface;

class FeatureContext extends AbstractFeatureContext
{
    /**
     * @var CFDIInterface
     */
    private $cfdi;

    /**
     * @var VoucherInterface
     */
    private $voucher;

    /**
     * @var PaymentInterface
     */
    private $payment;

    /**
     * @var BusinessnameInterface
     */
    private $businessname;

    /**
     * @var Item
     */
    private $item;

    /**
     * @var Item
     */
    private $unit;

    /**
     * @var Taxes
     */
    private $taxes;

    /**
     * @var Items
     */
    private $items;

    /**
     * @var VoucherResult
     */
    private $voucherResult;

    public function __construct()
    {
//        $this->item = new Item();
//        $this->unit = new Unit();
//        $this->taxes = new Taxes();
//        $this->items = new Items();

        $this->voucherResult = new VoucherResult();
    }

    /**
     * @Given I am Connect with:
     */
    public function iAmConnectWith(TableNode $table)
    {
        $this->cfdi = new CFDIFactory();

        $this->cfdi = $this->cfdi->create($this->singleItemsTable($table));

    }

    /**
     * @Given I am set the Voucher as:
     */
    public function iAmSetTheVoucherAs(TableNode $table)
    {
        $this->voucher = new VoucherFactory();

        $this->voucher = $this->voucher->create($this->singleItemsTable($table));
    }

    /**
     * @Given I am set the Payment as:
     */
    public function iAmSetThePaymentAs(TableNode $table)
    {
        $this->payment = new PaymentFactory();

        $this->voucher->setPayment($this->payment->create($this->singleItemsTable($table)));
    }

    /**
     * @Given I am set the Businessname as:
     */
    public function iAmSetTheBusinessnameAs(TableNode $table)
    {
        $this->businessname = new BusinessnameFactory();

        $this->businessname = $this->businessname->create($this->singleItemsTable($table));

        $this->voucher->setBusinessName($this->businessname);
    }

    /**
     * @Given I am set the Address as:
     */
    public function iAmSetTheAddressAs(TableNode $table)
    {
        $address = new AddressFactory();

        $this->businessname->setAddress($address->create($this->singleItemsTable($table)));
    }

    /**
     * @Given I get a Voucher
     */
    public function iGetAVoucher()
    {
        try{

            $this->voucherResult->setVoucher($this->cfdi->execute($this->voucher)->getVoucher());

            echo "The voucher is: " . $this->voucherResult->getVoucher();
        }catch (VoucherException $e){
            echo $e->getMessage();
        }
    }

    /**
     * @Given I set the Invoice Details as:
     */
    public function iSetTheInvoiceDetails(TableNode $table)
    {

//        foreach($table as $item){
//            $this->item->setVoucher($this->voucherResult);
//            $this->item->setProductOrServiceKey($item['product_or_service_key']);
//            $this->item->setCertificateNumber($item['certificate_number']);
//            $this->item->setQuantity($item['quantity']);
//            $this->item->setDescription($item['description']);
//            $this->item->setIdentificationNumber($item['identification_number']);
//
//                $this->unit->setName($item['unit_name']);
//                $this->unit->setKey($item['unit_key']);
//                $this->unit->setValue($item['unit_value']);
//
//            $this->item->setUnit($this->unit);
//            $this->item->setDiscount($item['discount']);
//
//                $this->taxes->setTaxBase($item['tax_base']);
//                $this->taxes->setVatTransfer($item['vat_transfer']);
//                $this->taxes->setVatWithheld($item['vat_withheld']);
//                $this->taxes->setIepsTransfer($item['ieps_transfer']);
//                $this->taxes->setIepsWithheld($item['ieps_withheld']);
//                $this->taxes->setIsr($item['isr']);
//
//            $this->item->setTaxes($this->taxes);
//            $this->item->setPedimentNumber($item['pediment_number']);
//            $this->item->setPredialAccount($item['account_predial']);
//            $this->item->setNotes($item['notes']);
//
//            $this->items->addItem($this->item);
//
//            $this->admovil->detail($this->items);
//        }

    }

    /**
     * @Given I want to Bill
     */
    public function iWantToBill()
    {
//        $this->admovil->stamped($this->voucherResult);
    }
}
