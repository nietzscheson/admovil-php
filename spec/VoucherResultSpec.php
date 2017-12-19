<?php

/**
 * @package spec\Nietzscheson\Admovil
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Nietzscheson\Admovil;

use PhpSpec\ObjectBehavior;
use Nietzscheson\Admovil\VoucherResultInterface;

class VoucherResultSpec extends ObjectBehavior
{

    function it_is_should_implements_a_voucher_interface()
    {
        $this->shouldHaveType(VoucherResultInterface::class);
    }

    function it_is_should_return_a_voucher()
    {
        $voucher = '0011223344';
        $this->setVoucher($voucher);
        $this->getVoucher()->shouldReturn($voucher);
    }
}