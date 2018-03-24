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

use Nietzscheson\Admovil\CFDI\CFDIPaymentInterface;
use Nietzscheson\Admovil\CFDI\CFDIPaymentResultInterface;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDIPaymentFactory;
use PhpSpec\ObjectBehavior;

class CFDIPaymentSpec extends ObjectBehavior
{
    function its_should_implement_a_cfdi_payment_interface(): void
    {
        $this->shouldHaveType(CFDIPaymentInterface::class);
    }

    function its_should_return_a_cfdi_payment_result_interface(): void
    {
        $cfdiPayment = new CFDIPaymentFactory();

        $this->execute($cfdiPayment::create())->shouldBeAnInstanceOf(CFDIPaymentResultInterface::class);
    }
}