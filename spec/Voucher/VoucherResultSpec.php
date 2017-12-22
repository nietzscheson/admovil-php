<?php

/**
 * @package spec\Nietzscheson\Admovil
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Nietzscheson\Admovil\Voucher;

use Nietzscheson\Admovil\Voucher\VoucherResultInterface;
use PhpSpec\ObjectBehavior;

class VoucherResultSpec extends ObjectBehavior
{

    function it_is_should_implements_a_voucher_result_interface()
    {
        $this->shouldHaveType(VoucherResultInterface::class);
    }

    function its_should_return_a_voucher()
    {
        $this->setVoucher($voucher = '112233445566');
        $this->getVoucher()->shouldReturn($voucher);
    }
}