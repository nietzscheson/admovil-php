<?php

namespace spec\Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\CFDI\TaxIdResolverInterface;
use Nietzscheson\Admovil\CFDI\Voucher\Businessname\BusinessnameInterface;
use Nietzscheson\Admovil\CFDI\Voucher\VoucherInterface;
use PhpSpec\ObjectBehavior;

class TaxIdResolverSpec extends ObjectBehavior
{
    const RFC = 'AAA010101AAA';

    function let(BusinessnameInterface $businessname, VoucherInterface $voucher)
    {
        $businessname->getRFC()->willReturn(self::RFC);
        $voucher->getBusinessName()->willReturn($businessname);
    }

    function its_should_implement_a_tax_id_resolver_interface()
    {
        $this->shouldHaveType(TaxIdResolverInterface::class);
    }

    function its_should_return_a_resolver_null(VoucherInterface $voucher, BusinessnameInterface $businessname)
    {
        $businessname->getRFC()->willReturn(TaxIdResolverInterface::GENERIC_RFC);
        $this->resolver($voucher)->shouldReturn(null);
    }

    function its_should_return_a_resolver_string(VoucherInterface $voucher)
    {
        $this->resolver($voucher)->shouldReturn(self::RFC);
    }
}
