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

use Nietzscheson\Admovil\CFDI\TaxIdResolverInterface;
use Nietzscheson\Admovil\Model\CFDI\Businessname\BusinessnameInterface;
use Nietzscheson\Admovil\Model\CFDIInterface;
use PhpSpec\ObjectBehavior;

class TaxIdResolverSpec extends ObjectBehavior
{
    const RFC = 'AAA010101AAA';

    function let(BusinessnameInterface $businessname, CFDIInterface $voucher)
    {
        $businessname->getRFC()->willReturn(self::RFC);
        $voucher->getBusinessName()->willReturn($businessname);
    }

    function its_should_implement_a_tax_id_resolver_interface()
    {
        $this->shouldHaveType(TaxIdResolverInterface::class);
    }

    function its_should_return_a_resolver_null(CFDIInterface $voucher, BusinessnameInterface $businessname)
    {
        $businessname->getRFC()->willReturn(TaxIdResolverInterface::GENERIC_RFC);
        $this->resolver($voucher)->shouldReturn(null);
    }

    function its_should_return_a_resolver_string(CFDIInterface $voucher)
    {
        $this->resolver($voucher)->shouldReturn(self::RFC);
    }
}
