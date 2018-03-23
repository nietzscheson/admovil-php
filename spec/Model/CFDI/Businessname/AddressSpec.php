<?php

/**
 * @package spec\Nietzscheson\Model\CFDI\Businessname
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\Model\CFDI\Businessname;

use Nietzscheson\Admovil\Model\CFDI\Businessname\AddressInterface;
use PhpSpec\ObjectBehavior;

class AddressSpec extends ObjectBehavior
{

    function it_is_should_implement_a_address_interface()
    {
        $this->shouldHaveType(AddressInterface::class);
    }

    function it_is_should_return_a_street()
    {
        $this->setStreet($street = (string) 'The street');
        $this->getStreet()->shouldReturn($street);
    }

    function it_is_should_return_a_code_postal()
    {
        $this->setCodePostal($codePostal = (int) 77500);
        $this->getCodePostal()->shouldReturn($codePostal);
    }

    function it_is_should_return_a_neighborhood()
    {
        $this->setNeighborhood($neighbornhood = (string) 'The Neighbornhood');
        $this->getNeighborhood()->shouldReturn($neighbornhood);
    }

    function it_is_should_return_a_state()
    {
        $this->setState($state = (string) 'The State');
        $this->getState()->shouldReturn($state);
    }

    function it_is_should_return_a_city()
    {
        $this->setCity($city = (string) 'The City');
        $this->getCity()->shouldReturn($city);
    }

    function it_is_should_return_a_town()
    {
        $this->setTown($town = (string) 'The Town');
        $this->getTown()->shouldReturn($town);
    }

    function it_is_should_return_a_exterior_number()
    {
        $this->setExteriorNumber($exteriorNumber = (string) 'The Exterior Number');
        $this->getExteriorNumber()->shouldReturn($exteriorNumber);
    }

    function it_is_should_return_a_interior_number()
    {
        $this->setInteriorNumber($interiorNumber = (string) 'The Interior Number');
        $this->getInteriorNumber()->shouldReturn($interiorNumber);
    }

    function it_is_should_return_a_telephone()
    {
        $this->setTelephone($telephone = (int) 9999999999);
        $this->getTelephone()->shouldReturn($telephone);
    }

    function it_is_should_return_a_fiscal_residency()
    {
        $this->setFiscalResidency($fiscalResidency = (string) 'The Fiscal Residency');
        $this->getFiscalResidency()->shouldReturn($fiscalResidency);
    }
}