<?php

/**
 * @package spec\Nietzscheson\Admovil\Item
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\Item;

use Nietzscheson\Admovil\Item\UnitInterface;
use PhpSpec\ObjectBehavior;

class UnitSpec extends ObjectBehavior
{

    function its_should_implement_a_unit_interface(): void
    {
        $this->shouldHaveType(UnitInterface::class);
    }

    function its_should_return_a_name(): void
    {
        $this->setName($name = 'The Name');
        $this->getName()->shouldReturn($name);
    }

    function its_should_return_a_key(): void
    {
        $this->setKey($key = 'Key');
        $this->getKey()->shouldReturn($key);
    }

    function its_should_return_a_value(): void
    {
        $this->setValue($value = 'Value');
        $this->getValue()->shouldReturn($value);
    }
}