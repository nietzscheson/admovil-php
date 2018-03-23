<?php

/**
 * @package spec\Nietzscheson\Model\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Nietzscheson\Admovil\CFDI\CFDIData;

use Nietzscheson\Admovil\Model\CFDI\CredentialInterface;
use PhpSpec\ObjectBehavior;

class CredentialSpec extends ObjectBehavior
{

    function its_should_implement_a_credential_interface()
    {
        $this->shouldImplement(CredentialInterface::class);
    }

    function its_should_return_a_rfc()
    {
        $this->setRFC($rfc = 'RFC1122334455');
        $this->getRFC()->shouldReturn($rfc);
    }

    function its_should_return_a_system_id()
    {
        $this->setSystemId($id = 'admovil-php');
        $this->getSystemId()->shouldReturn($id);
    }

    function its_should_return_a_user()
    {
        $this->setUser($user = 'user');
        $this->getUser()->shouldReturn($user);
    }

    function its_should_return_a_password()
    {
        $this->setPassword($pass = '112233');
        $this->getPassword()->shouldReturn($pass);
    }
}