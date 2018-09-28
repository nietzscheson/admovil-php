<?php

use Behat\Gherkin\Node\TableNode;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDIFactory;
use Nietzscheson\Admovil\CFDI\CFDIInterface;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\PaymentFactory;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\Businessname\BusinessnameFactory;
use Nietzscheson\Admovil\Model\CFDI\Businessname\BusinessnameInterface;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\Businessname\AddressFactory;
use Nietzscheson\Admovil\CFDI\CFDIResult;
use Nietzscheson\Admovil\Exception\CFDIException;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDIDetailFactory;
use Nietzscheson\Admovil\Collection\Items;
use Nietzscheson\Admovil\CFDI\CFDI;
use Nietzscheson\Admovil\CFDI\CFDIDetailInterface;
use Nietzscheson\Admovil\CFDI\CFDIDetail;
use Nietzscheson\Admovil\CFDI\CFDICheckInInterface;
use Nietzscheson\Admovil\CFDI\CFDICheckIn;
use Nietzscheson\Admovil\Exception\CFDICheckinException;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\CredentialFactory;
use Nietzscheson\Admovil\CFDI\CFDIRelated;
use Nietzscheson\Admovil\Model\CFDIRelated as CFDIRelatedModel;
use Nietzscheson\Admovil\Model\CFDIRelated\RelatedTypeInterface;
use Nietzscheson\Admovil\CFDI\CFDIRelatedInterface;
use LucidFrame\Console\ConsoleTable;
use Nietzscheson\Admovil\CFDI\CFDIPayment;
use Nietzscheson\Admovil\CFDI\CFDIPaymentDetail;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDIPaymentFactory;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDIPaymentDetailFactory;
use Nietzscheson\Admovil\CFDI\CFDIUUID;
use Nietzscheson\Admovil\Exception\CFDIUUIDException;
use Nietzscheson\Admovil\CFDI\CFDICancel;

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
     * @var CFDIInterface
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

    /**
     * @var CFDIPayment
     */
    private $cfdiPayment;

    /**
     * @var CFDIPaymentDetail
     */
    private $cfdiPaymentDetail;

    public function __construct()
    {
        $this->voucherResult = new CFDIResult();
        $this->itemsRelated = new Items();
        $this->cfdi = new CFDI();
        $this->cfdiDetail = new CFDIDetail();
        $this->cfdiCheckIn = new CFDICheckIn();
        $this->cfdiRelated = new CFDIRelated();
        $this->cfdiPayment = new CFDIPayment();
        $this->cfdiPaymentDetail = new CFDIPaymentDetail();
    }

    /**
     * @Given I am set the Voucher as:
     */
    public function iAmSetTheVoucherAs(TableNode $table)
    {
        $this->voucher = CFDIFactory::create($this->singleItemsTable($table));
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

        $item = CFDIDetailFactory::create($this->singleItemsTable($table));

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

            $this->voucherResult->setVoucher($this->cfdi->execute(CFDIFactory::create(['currency' => $item['currency']]))->getVoucher());

            $this->vouchers[] = $this->voucherResult->getVoucher();

            $item = CFDIDetailFactory::create(['unit_value' => $item['value']]);

            $items = new Items;
            $items->addItem($item);

            $this->cfdiDetail->execute($items, $this->voucherResult);

            $cfdiCheckinResult = $this->cfdiCheckIn->execute($this->voucherResult, CredentialFactory::create());

            $cfdiRelatedData = new CFDIRelatedModel();

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

            $this->voucherResult->setVoucher($this->cfdi->execute(CFDIFactory::create(['currency' => $item['currency']]))->getVoucher());

            $item = CFDIDetailFactory::create(['unit_value' => $item['value']]);

            $items = new Items;
            $items->addItem($item);

            $this->cfdiDetail->execute($items, $this->voucherResult);

            $this->cfdiRelated->execute($this->itemsRelated, $this->voucherResult);

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

    /**
     * @Given I generate a bill as :billAmount with a payment supplement as :paymentSupplementAmount as
     */
    public function iGenerateABillAs($billAmount, $paymentSupplementAmount)
    {

        $consoleTable = new ConsoleTable();
        $consoleTable->setHeaders(['Voucher', 'Payment Id']);

        $this->voucherResult->setVoucher($this->cfdi->execute(CFDIFactory::create())->getVoucher());

        $item = CFDIDetailFactory::create(['unit_value' => $billAmount]);

        $items = new Items;
        $items->addItem($item);

        $this->cfdiDetail->execute($items, $this->voucherResult);

        try{
            $cfdiPaymentResult = $this->cfdiPayment->execute(CFDIPaymentFactory::create(['voucher' => $this->voucherResult->getVoucher()]));

            $consoleTable->addRow([$this->voucherResult->getVoucher(), $cfdiPaymentResult->getId()]);

            $cfdiCheckinResult = $this->cfdiCheckIn->execute($this->voucherResult, CredentialFactory::create());

            $this->cfdiPaymentDetail->execute(CFDIPaymentDetailFactory::create([
                'voucher' => $this->voucherResult, 
                'payment_id' => $cfdiPaymentResult->getId(), 
                'amount_paid' => (float) $paymentSupplementAmount, 
                'uuid' => $cfdiCheckinResult->getUUID(),
                'previous_balance_amount' => (float) $billAmount
            ]));

            $consoleTable->display();

        }catch (Exception $e){
            echo '<pre>';print_r($e->getMessage());exit();
        }

    }

    /**
     * @Given Must me notified with the uuid of voucher
     */
    public function mustMeNotifiedWithTheUUIDOfVoucher()
    {
        $consoleTable = new ConsoleTable();
        $consoleTable->setHeaders(['','Voucher', 'UUID']);

        foreach ($this->vouchers as $item){
            $cfdiResult = new CFDIResult();

            $cfdiResult->setVoucher($item);

            $uuid = new CFDIUUID();

            try{
                $uuidResult = $uuid->execute(CredentialFactory::create(), $cfdiResult);

                $consoleTable->addRow(['#', $item, $uuidResult->getUUID()]);
            }catch(CFDIUUIDException $e){
                echo $e->getMessage();
                exit();
            }
        }

        $consoleTable->display();
    }

    /**
     * @Given Must me notified that voucher is canceled
     */
    public function mustMeNotifiedThatVoucherIsCanceled()
    {
        $consoleTable = new ConsoleTable();
        $consoleTable->setHeaders(['','Voucher']);

        foreach ($this->vouchers as $item){
            $cfdiResult = new CFDIResult();

            $cfdiResult->setVoucher($item);

            $cfdiCancel = new CFDICancel();

            try{

                $cfdiCancel->execute(CredentialFactory::create(), $cfdiResult);

                $consoleTable->addRow(['#', $item]);
            }catch(CFDIUUIDException $e){
                echo $e->getMessage();
                exit();
            }
        }

        $consoleTable->display();
    }
}