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

use Nietzscheson\Admovil\AdmovilInterface;
use Nietzscheson\Admovil\ItemsInterface;
use Nietzscheson\Admovil\StampedInterface;
use Nietzscheson\Admovil\VoucherException;
use Nietzscheson\Admovil\VoucherInterface;
use Nietzscheson\Admovil\VoucherResultInterface;
use PhpSpec\ObjectBehavior;

class AdmovilSpec extends ObjectBehavior
{

    function it_is_should_implement_a_admovil_interface()
    {
        $this->shouldHaveType(AdmovilInterface::class);
    }

    function int_is_should_return_a_voucher(VoucherInterface $voucher)
    {
        $this->voucher($voucher)->shouldBeAnInstanceOf(VoucherResultInterface::class);
        $this->voucher($voucher)->shouldBeAnInstanceOf(VoucherException::class);
    }
}