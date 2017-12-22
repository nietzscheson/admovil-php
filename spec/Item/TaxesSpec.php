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

use Nietzscheson\Admovil\Item\TaxesInterface;
use PhpSpec\ObjectBehavior;

class TaxesSpec extends ObjectBehavior
{

    function its_should_implement_a_taxes_interface(): void
    {
        $this->shouldHaveType(TaxesInterface::class);
    }

    function its_should_return_a_tax_base(): void
    {
        $this->setTaxBase($taxBase = 02.0);
        $this->getTaxBase()->shouldReturn($taxBase);
    }

    function its_should_return_a_vat_transfer(): void
    {
        $this->setVatTransfer($vatTransfer = 16.00);
        $this->getVatTransfer()->shouldReturn($vatTransfer);
    }

    function its_should_return_a_vat_withheld(): void
    {
        $this->setVatWithheld($vatWithheld = 16.00);
        $this->getVatWithheld()->shouldReturn($vatWithheld);
    }

    function its_should_return_a_ieps_transfer(): void
    {
        $this->setIEPSTransfer($eipsTransfer = 0.0);
        $this->getIEPSTransfer()->shouldReturn($eipsTransfer);
    }

    function its_should_return_a_ieps_withheld(): void
    {
        $this->setIEPSWithheld($eipsWitheld = 0.0);
        $this->getIEPSWithheld()->shouldReturn($eipsWitheld);
    }

    function its_should_return_a_isr(): void
    {
        $this->setISR($isr = 0.0);
        $this->getISR()->shouldReturn($isr);
    }
}