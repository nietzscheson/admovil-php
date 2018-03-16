<?php

/**
 * @package spec\Nietzscheson\Admovil
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Nietzscheson\Admovil;

use Nietzscheson\Admovil\AdmovilInterface;
use PhpSpec\ObjectBehavior;

class AdmovilSpec extends ObjectBehavior
{

    function it_is_should_implement_a_admovil_interface()
    {
        $this->shouldHaveType(AdmovilInterface::class);
    }
}