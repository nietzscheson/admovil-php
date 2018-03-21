<?php

/**
 * @package spec\Nietzscheson\Admovil\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\CFDI\TaxIdResolverInterface;
use Nietzscheson\Admovil\CFDI\Voucher\Businessname\BusinessnameInterface;
use Nietzscheson\Admovil\CFDI\Voucher\VoucherInterface;

class TaxIdResolverSpec
{
    function its_should_implement_a_tax_id_resolver_interface()
    {
        $this->shouldHaveType(TaxIdResolverInterface::class);
    }

    function its_should_return_a_resolver_null(VoucherInterface $voucher, BusinessnameInterface $businessname)
    {
        $businessname->setRFC(TaxIdResolverInterface::GENERIC_RFC);

        $voucher->setBusinessName($businessname);

        $this->resolver($voucher)->shouldReturn(null);
    }

    function its_should_return_a_resolver_string(VoucherInterface $voucher, BusinessnameInterface $businessname)
    {
        $businessname->setRFC($rfc = 'AAA010101AAA');

        $voucher->setBusinessName($businessname);

        $this->resolver($voucher)->shouldReturn($rfc);
    }
}