<?php

/**
 * @package spec\Nietzscheson\Admovil
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Nietzscheson\Admovil\CFDI\CFDIData;

use Nietzscheson\Admovil\CFDI\CFDIData\Businessname\BusinessnameAwareInterface;
use Nietzscheson\Admovil\CFDI\CFDIData\Businessname\BusinessnameInterface;
use Nietzscheson\Admovil\NotesInterface;
use Nietzscheson\Admovil\CFDI\CFDIData\Payment\PaymentInterface;
use PhpSpec\ObjectBehavior;
use Nietzscheson\Admovil\CFDI\CFDIData\CFDIDataInterface;

class CFDIDataSpec extends ObjectBehavior
{

    function it_is_should_implements_a_cfdi_data_interface()
    {
        $this->shouldHaveType(CFDIDataInterface::class);
    }

    function it_is_should_implement_a_notes_interface()
    {
        $this->shouldHaveType(NotesInterface::class);
    }

    function it_is_should_implement_a_businessname_aware_interface()
    {
        $this->shouldHaveType(BusinessnameAwareInterface::class);
    }

    function it_is_should_return_a_billing_type()
    {
        $this->setBillingType($billingType = (string) 'The Billing Type');
        $this->getBillingType()->shouldReturn($billingType);
    }

    function it_is_should_return_a_voucher_type()
    {
        $this->setVoucherType($voucherType = (string) 'The Voucher Type');
        $this->getVoucherType()->shouldReturn($voucherType);
    }

    function it_is_should_return_a_branch_office()
    {
        $this->setBranchOffice($branchOfficce = (string) 'The Branch Officce');
        $this->getBranchOffice()->shouldReturn($branchOfficce);
    }

    function it_is_should_return_a_currency()
    {
        $this->setCurrency($currency = (string) 'The Currency');
        $this->getCurrency()->shouldReturn($currency);
    }

    function it_is_should_return_a_exchange_rate()
    {
        $this->setExchangeRate($exchangeRate = (string) 'The Exchange Rate');
        $this->getExchangeRate()->shouldReturn($exchangeRate);
    }

    function it_is_should_return_a_cfdi_use()
    {
        $this->setCFDIUse($cfdiUse = (string) 'The CFDI Use');
        $this->getCFDIUse()->shouldReturn($cfdiUse);
    }

    function it_is_should_return_a_confirmation()
    {
        $this->setConfirmation($confirmation = (string) 'The confirmation');
        $this->getConfirmation()->shouldReturn($confirmation);
    }

    function it_is_should_return_a_notes()
    {
        $this->setNotes($notes = 'The notes');
        $this->getNotes()->shouldReturn($notes);
    }

    function it_should_return_a_payment_aware(PaymentInterface $payment)
    {
        $this->setPayment($payment);
        $this->getPayment()->shouldBeAnInstanceOf($payment);
    }

    function it_should_return_a_businessname_aware(BusinessnameInterface $payment)
    {
        $this->setBusinessname($payment);
        $this->getBusinessname()->shouldBeAnInstanceOf($payment);
    }
}