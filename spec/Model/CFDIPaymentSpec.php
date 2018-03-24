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

use Datetime;
use Nietzscheson\Admovil\Model\CFDIPayment;
use Nietzscheson\Admovil\Model\CFDIPaymentInterface;
use PhpSpec\ObjectBehavior;

class CFDIPaymentSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(CFDIPayment::class);
    }

    function it_is_should_implements_a_cfdi_payment_interface(): void
    {
        $this->shouldHaveType(CFDIPaymentInterface::class);
    }

    function it_is_should_return_a_currency(): void
    {
        $this->setCurrency($currency = (string) 'The Currency');
        $this->getCurrency()->shouldReturn($currency);
    }

    function it_is_should_return_a_exchange_rate(): void
    {
        $this->setExchangeRate($exchangeRate = (string) 'The Exchange Rate');
        $this->getExchangeRate()->shouldReturn($exchangeRate);
    }

    function its_should_return_a_voucher(): void
    {
        $this->setVoucher($voucher = 112233445566);
        $this->getVoucher()->shouldReturn($voucher);
    }

    function its_should_return_a_date(): void
    {
        $date = new DateTime();

        $this->setDate($date = new DateTime('now'));
        $this->getDate()->shouldReturn($date);
        $this->getDate()->shouldHaveType(DateTime::class);
    }

    function its_should_return_a_operation_number(): void
    {
        $this->setOperationNumber($operationNumber = '1122334455');
        $this->getOperationNumber()->shouldReturn($operationNumber);
    }
}
