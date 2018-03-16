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

use Doctrine\Common\Collections\Collection;
use Nietzscheson\Admovil\Fixture\Factory\ItemFactory;
use Nietzscheson\Admovil\Item\ItemsInterface;
use PhpSpec\ObjectBehavior;

class ItemsSpec extends ObjectBehavior
{

    function let()
    {
        $item = new ItemFactory();
        $this->addItem($item::create());
    }

    function its_should_implement_a_item_interface(): void
    {
        $this->shouldHaveType(ItemsInterface::class);
    }

    function its_should_return_a_items_collection(): void
    {
        $this->getItems()->shouldBeAnInstanceOf(Collection::class);
    }
}