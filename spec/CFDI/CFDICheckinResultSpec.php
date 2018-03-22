<?php

/**
 * @package spec\Nietzscheson\Admovil
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\CFDI\CFDICheckinResultInterface;
use Nietzscheson\Admovil\Voucher\UUIDInterface;
use Nietzscheson\Admovil\Voucher\VoucherInterface;
use PhpSpec\ObjectBehavior;

class CFDICheckinResultSpec extends ObjectBehavior
{

    function it_is_should_implements_a_cfdi_checkin_result_interface(): void
    {
        $this->shouldHaveType(CFDICheckinResultInterface::class);
    }

    function it_is_should_implements_a_voucher_interface(): void
    {
        $this->shouldHaveType(VoucherInterface::class);
    }

    function it_is_should_implements_a_uuid_interface(): void
    {
        $this->shouldHaveType(UUIDInterface::class);
    }

    function its_should_return_a_voucher(): void
    {
        $this->setVoucher($voucher = 112233445566);
        $this->getVoucher()->shouldReturn($voucher);
    }

    function its_should_return_a_uuid(): void
    {
        $this->setUuid($uuid = '112233445566');
        $this->getUuid()->shouldReturn($uuid);
    }
}