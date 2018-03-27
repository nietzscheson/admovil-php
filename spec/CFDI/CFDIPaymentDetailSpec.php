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

use Nietzscheson\Admovil\CFDI\CFDIPaymentDetailtInterface;
use Nietzscheson\Admovil\CFDI\CFDIPaymentResultInterface;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDIPaymentDetailFactory;
use PhpSpec\ObjectBehavior;

class CFDIPaymentDetailSpec extends ObjectBehavior
{
    function its_should_implement_a_cfdi_payment_detail_interface(): void
    {
        $this->shouldHaveType(CFDIPaymentDetailtInterface::class);
    }

    function its_should_return_a_cfdi_payment_detail(): void
    {
        $this->execute(CFDIPaymentDetailFactory::create())->shouldBeAnInstanceOf(null);
    }
}