<?php

use Behat\Gherkin\Node\TableNode;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\CFDIDataFactory;
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
use Nietzscheson\Admovil\CFDI\CFDI;
use Nietzscheson\Admovil\CFDI\CFDIDetailInterface;
use Nietzscheson\Admovil\CFDI\CFDIDetail;
use Nietzscheson\Admovil\CFDI\CFDICheckInInterface;
use Nietzscheson\Admovil\CFDI\CFDICheckIn;
use Nietzscheson\Admovil\Exception\CFDICheckinException;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\CredentialFactory;
use Nietzscheson\Admovil\CFDI\CFDIRelatedData\CFDIRelatedData;
use Nietzscheson\Admovil\CFDI\CFDIRelatedData\RelatedTypeInterface;
use Nietzscheson\Admovil\CFDI\CFDIRelatedInterface;
use Nietzscheson\Admovil\CFDI\CFDIRelated;
use LucidFrame\Console\ConsoleTable;

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
    private $itemsRelated;

    /**
     * @var CFDIResult
     */
    private $voucherResult;

    /**
     * @var CFDIRelatedInterface
     */
    private $cfdiRelated;

    /**
     * @var array
     */
    private $vouchers;

    public function __construct()
    {
        $this->voucherResult = new CFDIResult();
        $this->itemsRelated = new Items();
        $this->cfdi = new CFDI();
        $this->cfdiDetail = new CFDIDetail();
        $this->cfdiCheckIn = new CFDICheckIn();
        $this->cfdiRelated = new CFDIRelated();
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

        $this->items = new Items();
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

            $cfdiCheckin = $this->cfdiCheckIn->execute($this->voucherResult, $credential);

        }catch (CFDICheckinException $e){
            echo $e->getMessage();
            exit;
        }

        echo "Voucher: " . $cfdiCheckin->getVoucher() . " UUID: " . $cfdiCheckin->getUUID();
    }

    /**
     * @Given I generate a multiples bills as:
     */
    public function iGenerateAMultiplesBillsAs(TableNode $table)
    {

        $consoleTable = new ConsoleTable();
        $consoleTable->setHeaders(['','Voucher Related']);

        foreach ($table as $item){

            $this->voucherResult->setVoucher($this->cfdi->execute(CFDIDataFactory::create(['currency' => $item['currency']]))->getVoucher());

            $this->vouchers[] = $this->voucherResult->getVoucher();

            $item = CFDIDetailDataFactory::create(['unit_value' => $item['value']]);

            $items = new Items;
            $items->addItem($item);

            $this->cfdiDetail->execute($items, $this->voucherResult);

            $cfdiCheckinResult = $this->cfdiCheckIn->execute($this->voucherResult, CredentialFactory::create());

            $cfdiRelatedData = new CFDIRelatedData();

            $cfdiRelatedData->setUuid($cfdiCheckinResult->getUUID());
            $cfdiRelatedData->setRelationType(RelatedTypeInterface::CFDI_BY_ADVANCE_PAYMENT);

            $this->itemsRelated->addItem($cfdiRelatedData);

            $consoleTable->addRow(['#', $this->voucherResult->getVoucher()]);
        }

        $consoleTable->display();


    }

    /**
     * @Given I generate a bill for related as:
     */
    public function iGenerateABillForRelatedAs(TableNode $table)
    {
        $consoleTable = new ConsoleTable();
        $consoleTable->setHeaders(['','Voucher']);

        foreach ($table as $item){

            $this->voucherResult->setVoucher($this->cfdi->execute(CFDIDataFactory::create(['currency' => $item['currency']]))->getVoucher());

            $item = CFDIDetailDataFactory::create(['unit_value' => $item['value']]);

            $items = new Items;
            $items->addItem($item);

            $this->cfdiDetail->execute($items, $this->voucherResult);

            $this->cfdiCheckIn->execute($this->voucherResult, CredentialFactory::create());

            $consoleTable->addRow(['#', $this->voucherResult->getVoucher()]);

        }

        $consoleTable->display();
    }

    /**
     * @Given I want related
     */
    public function iWantToRelated()
    {
        $this->cfdiRelated->execute($this->itemsRelated, $this->voucherResult);
    }

    /**
     * @Given Must me notified that is related
     */
    public function mustMeNotifiedThatIsRelated()
    {

        $consoleTable = new ConsoleTable();
        $consoleTable->setHeaders(['','Voucher', 'Voucher Related']);

        foreach ($this->vouchers as $item){
            $consoleTable->addRow(['#', $this->voucherResult->getVoucher(), $item]);
        }

        $consoleTable->display();
    }
}