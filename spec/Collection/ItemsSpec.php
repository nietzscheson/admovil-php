<?php

namespace spec\Nietzscheson\Admovil\Collection;

use Nietzscheson\Admovil\Collection\Items;
use PhpSpec\ObjectBehavior;

class ItemsSpec extends ObjectBehavior
{
    function its_should_implement_a_items_interface(): void
    {
        $this->shouldHaveType(Items::class);
    }
}
