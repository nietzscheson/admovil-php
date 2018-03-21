<?php

/**
 * @package spec\Nietzscheson\Admovil\Voucher\Payment
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\Voucher\Payment;

use Nietzscheson\Admovil\CFDI\Voucher\Payment\PaymentInterface;
use PhpSpec\ObjectBehavior;

class PaymentSpec extends ObjectBehavior
{

    function its_should_implement_a_payment_interface(): void
    {
        $this->shouldImplement(PaymentInterface::class);
    }

    function its_should_return_a_condition(): void
    {
        $this->setCondition($condition = 'Condition');
        $this->getCondition()->shouldReturn($condition);
    }

    function its_should_return_a_form(): void
    {
        $this->setForm($form = 'Form');
        $this->getForm()->shouldReturn($form);
    }

    function its_should_return_a_account(): void
    {
        $this->setAccount($account = 'Account');
        $this->getAccount()->shouldReturn($account);
    }

    function its_should_return_a_method(): void
    {
        $this->setMethod($method = 'Method');
        $this->getMethod()->shouldReturn($method);
    }
}