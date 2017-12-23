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
use Nietzscheson\Admovil\Fixture\Factory\ItemFactory;
use Nietzscheson\Admovil\Fixture\Factory\UnitFactory;
use Nietzscheson\Admovil\Fixture\Factory\TaxesFactory;
use Nietzscheson\Admovil\Item\Items;
use Nietzscheson\Admovil\CFDI\CFDIDetailInterface;
use Nietzscheson\Admovil\CFDI\CFDIDetail;
use Nietzscheson\Admovil\CFDI\CFDICheckInInterface;
use Nietzscheson\Admovil\CFDI\CFDICheckIn;
use Nietzscheson\Admovil\Fixture\Factory\CFDICheckInFactory;

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
     * @var VoucherInterface
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
     * @var VoucherResult
     */
    private $voucherResult;

    public function __construct()
    {
        $this->voucherResult = new VoucherResult();
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
        $this->voucher = VoucherFactory::create($this->singleItemsTable($table));
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
        }catch (VoucherException $e){
            echo $e->getMessage();
        }
    }

    /**
     * @Given I set the Invoice Details as:
     */
    public function iSetTheInvoiceDetails(TableNode $table)
    {

        foreach($table as $i){

            $item = ItemFactory::create([
                'product_or_service_key' => $i['product_or_service_key'],
                'certificate_number' => $i['certificate_number'],
                'quantity' => $i['quantity'],
                'description' => $i['description'],
                'identification_number' => $i['identification_number'],
                'discount' => $i['discount'],
                'pediment_number' => $i['pediment_number'],
                'predial_account' => $i['predial_account'],
                'notes' => $i['notes'],
            ]);

            $item->setUnit(UnitFactory::create(['name' => $i['unit_name'], 'key' => $i['unit_key'], 'value' => $i['unit_value']]));

            $item->setTaxes(TaxesFactory::create(['tax_base' => $i['tax_base'], 'vat_transfer' => $i['vat_transfer'], 'vat_withheld' => $i['vat_withheld'], 'ieps_transfer' => $i['ieps_transfer'], 'ieps_withheld' => $i['ieps_withheld'], 'isr' => $i['isr']]));

            $this->items->addItem($item);
        }

        $this->cfdiDetail->execute($this->items, $this->voucherResult);

    }

    /**
     * @Given I want to Bill
     */
    public function iWantToBill()
    {
        CFDICheckInFactory::create(['voucher' => $this->voucherResult->getVoucher()]);
    }
}