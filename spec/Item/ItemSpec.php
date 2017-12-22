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

namespace spec\Nietzscheson\Admovil\Item;

use Nietzscheson\Admovil\Item\ItemInterface;
use Nietzscheson\Admovil\Item\TaxesAwareInterface;
use Nietzscheson\Admovil\Item\TaxesInterface;
use Nietzscheson\Admovil\Item\UnitAwareInterface;
use Nietzscheson\Admovil\Item\UnitInterface;
use Nietzscheson\Admovil\NotesInterface;
use PhpSpec\ObjectBehavior;

class ItemSpec extends ObjectBehavior
{

    function its_should_implement_a_item_interface(): void
    {
        $this->shouldHaveType(ItemInterface::class);
    }

    function its_should_implement_a_notes_interface(): void
    {
        $this->shouldHaveType(NotesInterface::class);
    }

    function its_should_implement_a_taxes_aware_interface(): void
    {
        $this->shouldHaveType(TaxesAwareInterface::class);
    }

    function its_should_implement_a_unit_aware_interface(): void
    {
        $this->shouldHaveType(UnitAwareInterface::class);
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
        $this->setCertificateNumber($number = '112233344556');
        $this->getCertificateNumber()->shouldReturn($number);
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

    function it_should_return_a_taxes_interface(TaxesInterface $taxes)
    {
        $this->setTaxes($taxes);
        $this->getTaxes()->shouldBeAnInstanceOf($taxes);
    }

    function it_should_return_a_unit_interface(UnitInterface $unit)
    {
        $this->setUnit($unit);
        $this->getUnit()->shouldBeAnInstanceOf($unit);
    }

}