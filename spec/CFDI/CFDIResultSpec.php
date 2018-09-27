<?php

/**
 * @package spec\Nietzscheson\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\CFDI\CFDIResultInterface;
use Nietzscheson\Admovil\Voucher\VoucherInterface;
use PhpSpec\ObjectBehavior;

class CFDIResultSpec extends ObjectBehavior
{

    function it_is_should_implements_a_voucher_result_interface(): void
    {
        $this->shouldHaveType(CFDIResultInterface::class);
    }

    function it_is_should_implements_a_voucher_interface(): void
    {
        $this->shouldHaveType(VoucherInterface::class);
    }

    function its_should_return_a_voucher(): void
    {
        $this->setVoucher($voucher = '112233445566');
        $this->getVoucher()->shouldReturn($voucher);
    }
}