<?php

/**
 * @package spec\Nietzscheson\Admovil
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Nietzscheson\Admovil\Voucher\Businessname;

use PhpSpec\ObjectBehavior;
use Nietzscheson\Admovil\Voucher\Businessname\BusinessnameInterface;
use Nietzscheson\Admovil\Voucher\Businessname\AddressAwareInterface;
use Nietzscheson\Admovil\Voucher\Businessname\AddressInterface;

class BusinessnameSpec extends ObjectBehavior
{

    function it_is_should_implement_a_businessname_interface()
    {
        $this->shouldHaveType(BusinessnameInterface::class);
    }

    function it_is_should_implement_a_address_aware_interface()
    {
        $this->shouldHaveType(AddressAwareInterface::class);
    }

    function it_is_should_return_a_id()
    {
        $this->setId($id = (string) 1);
        $this->getId()->shouldReturn($id);
    }

    function it_is_should_return_a_name()
    {
        $this->setName($name = (string) 'The Name');
        $this->getName()->shouldReturn($name);
    }

    function it_is_should_return_a_rfc()
    {
        $this->setRFC($rfc = (string) 'The RFC');
        $this->getRFC()->shouldReturn($rfc);
    }

    function it_is_should_return_a_tax_id()
    {
        $this->setTaxId($taxId = (int) 123456);
        $this->getTaxId()->shouldReturn($taxId);
    }

    function it_is_should_return_a_tax_reference()
    {
        $this->setReference($reference = (string) 'The reference');
        $this->getReference()->shouldReturn($reference);
    }

    function it_is_should_return_a_tax_email()
    {
        $this->setEmail($email = (string) 'the@email.com');
        $this->getEmail()->shouldReturn($email);
    }

    function it_is_should_return_a_address_aware(AddressInterface $address)
    {
        $this->setAddress($address);
        $this->getAddress()->shouldBeAnInstanceOf($address);
    }
}