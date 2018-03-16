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
use Nietzscheson\Admovil\Fixture\Factory\VoucherFactory;
use Nietzscheson\Admovil\CFDI\CFDIResultInterface;
use PhpSpec\ObjectBehavior;

class CFDISpec extends ObjectBehavior
{

    function let()
    {
        $this->setUser('Pruebas');
        $this->setPassword('10101010');
        $this->setSystemId('admovil-php');
        $this->setRFC('AAA010101AAA');
    }

    function its_should_implement_a_cfdi_interface()
    {
        $this->shouldHaveType(CFDIInterface::class);
    }

    function its_should_return_a_voucher_result_interface()
    {
        $voucher = new VoucherFactory();

        $this->execute($voucher->create())->shouldBeAnInstanceOf(CFDIResultInterface::class);
    }
}