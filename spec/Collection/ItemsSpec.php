<?php

/**
 * @package spec\Nietzscheson\Collection
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

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
