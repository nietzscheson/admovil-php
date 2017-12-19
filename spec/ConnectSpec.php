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

use Nietzscheson\Admovil\ConnectInterface;
use Nietzscheson\Admovil\CredentialInterface;
use PhpSpec\ObjectBehavior;

class ConnectSpec extends ObjectBehavior
{

    function it_is_should_implement_a_connect_interface()
    {
        $this->shouldHaveType(ConnectInterface::class);
    }

    function it_is_should_return_a_credential(CredentialInterface $credential)
    {
        $this->setCredential($credential);
        $this->getCredential()->shouldReturn($credential);
    }
}