<?php

/**
 * @package spec\Nietzscheson\Admovil\Item
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\CFDI\CFDIDetailData;

use Nietzscheson\Admovil\Model\CFDIDetailInterface;
use Nietzscheson\Admovil\Model\CFDIDetail\TaxesInterface;
use Nietzscheson\Admovil\Model\CFDIDetail\UnitInterface;
use Nietzscheson\Admovil\Collection\ItemInterface;
use Nietzscheson\Admovil\NotesInterface;
use PhpSpec\ObjectBehavior;

class CFDIDetailSpec extends ObjectBehavior
{

    function its_should_implement_a_cfdi_detail_data_interface(): void
    {
        $this->shouldHaveType(CFDIDetailInterface::class);
    }

    function its_should_implement_a_notes_interface(): void
    {
        $this->shouldHaveType(NotesInterface::class);
    }

    function its_should_implement_a_unit_interface(): void
    {
        $this->shouldHaveType(UnitInterface::class);
    }

    function its_should_implement_a_taxex_interface(): void
    {
        $this->shouldHaveType(TaxesInterface::class);
    }

    function its_should_implement_a_item_interface(): void
    {
        $this->shouldHaveType(ItemInterface::class);
    }

    function its_should_return_a_product_or_service_key(): void
    {
        $this->setProductOrServiceKey($key = 'key');
        $this->getProductOrServiceKey()->shouldReturn($key);
    }

    function its_should_return_a_certificate_number(): void
    {
        $this->setCertificateNumber($number = '112233344556');
        $this->getCertificateNumber()->shouldReturn($number);
    }

    function its_should_return_a_quantity(): void
    {
        $this->setQuantity($quantity = 1.0);
        $this->getQuantity()->shouldReturn($quantity);
    }

    function its_should_return_a_description(): void
    {
        $this->setDescription($description = 'Description');
        $this->getDescription()->shouldReturn($description);
    }

    function its_should_return_a_identification_number(): void
    {
        $this->setIdentificationNumber($id = 1);
        $this->getIdentificationNumber()->shouldReturn($id);
    }

    function its_should_return_a_discount(): void
    {
        $this->setDiscount($discount = 0.0);
        $this->getDiscount()->shouldReturn($discount);
    }

    function its_should_return_a_pediment_number(): void
    {
        $this->setPedimentNumber($number = '55667788');
        $this->getPedimentNumber()->shouldReturn($number);
    }

    function its_should_return_a_predial_account(): void
    {
        $this->setPredialAccount($account = '55667788');
        $this->getPredialAccount()->shouldReturn($account);
    }

    function its_should_return_a_notes(): void
    {
        $this->setNotes($notes = 'The notes');
        $this->getNotes()->shouldReturn($notes);
    }

    function its_should_return_a_tax_base(): void
    {
        $this->setTaxBase($taxBase = 1.0);
        $this->getTaxBase()->shouldReturn($taxBase);
    }

    function its_should_return_a_vat_transfer(): void
    {
        $this->setVatTransfer($vatTransfer = 100.00);
        $this->getVatTransfer()->shouldReturn($vatTransfer);
    }

    function its_should_return_a_vat_withheld(): void
    {
        $this->setVATWithheld($vatWithheld = 16.00);
        $this->getVATWithheld()->shouldReturn($vatWithheld);
    }

    function its_should_return_a_ieps_transfer(): void
    {
        $this->setIEPSTransfer($ipesTransfer = 0.00);
        $this->getIEPSTransfer()->shouldReturn($ipesTransfer);
    }

    function its_should_return_a_ieps_withheld(): void
    {
        $this->setIEPSWithheld($ipesWithheld = 0.00);
        $this->getIEPSWithheld()->shouldReturn($ipesWithheld);
    }

    function its_should_return_a_isr(): void
    {
        $this->setISR($isr = 0.00);
        $this->getISR()->shouldReturn($isr);
    }

    function its_should_return_a_unit_name(): void
    {
        $this->setUnitName($unitName = 'Unit name');
        $this->getUnitName()->shouldReturn($unitName);
    }

    function its_should_return_a_unit_key(): void
    {
        $this->setUnitKey($unitKey = 'Unit key');
        $this->getUnitKey()->shouldReturn($unitKey);
    }

    function its_should_return_a_unit_value(): void
    {
        $this->setUnitValue($unitValue = 'Unit value');
        $this->getUnitValue()->shouldReturn($unitValue);
    }
}