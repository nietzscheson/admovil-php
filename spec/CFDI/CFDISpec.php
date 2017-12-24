<?php

/**
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\CFDI\CFDIInterface;
use Nietzscheson\Admovil\CFDI\CFDIUseInterface;
use Nietzscheson\Admovil\Fixture\Factory\BusinessnameFactory;
use Nietzscheson\Admovil\Fixture\Factory\PaymentFactory;
use Nietzscheson\Admovil\Voucher\Businessname\Address;
use Nietzscheson\Admovil\Voucher\Businessname\Businessname;
use Nietzscheson\Admovil\Voucher\Payment\Payment;
use Nietzscheson\Admovil\Voucher\VoucherInterface;
use Nietzscheson\Admovil\CFDI\CFDIResultInterface;
use PhpSpec\ObjectBehavior;

class CFDISpec extends ObjectBehavior
{

    function let(VoucherInterface $voucher, Payment $payment, Businessname $businessname, Address $address)
    {

        $this->setUser('Pruebas');
        $this->setPassword('10101010');
        $this->setSystemId('admovil-php');
        $this->setRFC('AAA010101AAA');

        $voucher->getBillingType()->willReturn('FA');
        $voucher->getVoucherType()->willReturn('I');
        $voucher->getBranchOffice()->willReturn('');
        $voucher->getNotes()->willReturn('The notes');
        $voucher->getCurrency()->willReturn('MXN');
        $voucher->getExchangeRate()->willReturn('1');
        $voucher->getCFDIUse()->willReturn(CFDIUseInterface::UNDEFINED);
        $voucher->getConfirmation()->willReturn('');

        $payment = new PaymentFactory();
        $businessname = new BusinessnameFactory();

        $voucher->getPayment()->willReturn($payment->create());
        $voucher->getBusinessName()->willReturn($businessname->create());
    }

    function its_should_implement_a_cfdi_interface()
    {
        $this->shouldHaveType(CFDIInterface::class);
    }

    function its_should_return_a_voucher_result_interface(VoucherInterface $voucher)
    {
        $this->execute($voucher)->shouldBeAnInstanceOf(CFDIResultInterface::class);
    }

}