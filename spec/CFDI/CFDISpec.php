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
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\CFDIFactory;
use Nietzscheson\Admovil\CFDI\CFDIResultInterface;
use PhpSpec\ObjectBehavior;

class CFDISpec extends ObjectBehavior
{
    function its_should_implement_a_cfdi_interface(): void
    {
        $this->shouldHaveType(CFDIInterface::class);
    }

    function its_should_return_a_voucher_result_interface(): void
    {
        $voucher = new CFDIFactory();

        $this->execute($voucher::create())->shouldBeAnInstanceOf(CFDIResultInterface::class);
    }
}