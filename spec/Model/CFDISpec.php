<?php

/**
 * @package spec\Nietzscheson\Model
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\Model;

use Nietzscheson\Admovil\Currency\CurrencyInterface;
use Nietzscheson\Admovil\Currency\ExchangeRateInterface;
use Nietzscheson\Admovil\Model\CFDI\Businessname\BusinessnameAwareInterface;
use Nietzscheson\Admovil\Model\CFDI\Businessname\BusinessnameInterface;
use Nietzscheson\Admovil\NotesInterface;
use Nietzscheson\Admovil\Model\CFDI\Payment\PaymentInterface;
use PhpSpec\ObjectBehavior;
use Nietzscheson\Admovil\Model\CFDIInterface;

class CFDISpec extends ObjectBehavior
{

    function it_is_should_implements_a_cfdi_data_interface()
    {
        $this->shouldHaveType(CFDIInterface::class);
    }

    function it_is_should_implements_a_currency_interface()
    {
        $this->shouldHaveType(CurrencyInterface::class);
    }

    function it_is_should_implements_a_exchange_rate_interface()
    {
        $this->shouldHaveType(ExchangeRateInterface::class);
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
        $this->setExchangeRate($exchangeRate = 1.0);
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