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
use Nietzscheson\Admovil\Item\TaxesInterface;
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

    function its_should_implement_a_unit_interface(): void
    {
        $this->shouldHaveType(UnitInterface::class);
    }

    function its_should_implement_a_taxex_interface(): void
    {
        $this->shouldHaveType(TaxesInterface::class);
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

    public function its_should_return_a_unit_key()
    {
        $this->setUnitKey($key = 'key');
        $this->getUnitKey()->shouldReturn($key );
    }

}