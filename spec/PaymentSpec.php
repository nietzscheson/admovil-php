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

use Nietzscheson\Admovil\PaymentInterface;
use PhpSpec\ObjectBehavior;

class PaymentSpec extends ObjectBehavior
{

    function it_is_should_implement_a_payment_interface()
    {
        $this->shouldHaveType(PaymentInterface::class);
    }

    function it_is_should_return_a_condition()
    {
        $this->setCondition($condition = (string) 'Condition');
        $this->getCondition()->shouldReturn($condition);
    }

    function it_is_should_return_a_form()
    {
        $this->setForm($form = (string) 'Form');
        $this->getForm()->shouldReturn($form);
    }

    function it_is_should_return_a_account()
    {
        $this->setAccount($account = (string) 'The Account');
        $this->getAccount()->shouldReturn($account);
    }

    function it_is_should_return_a_method()
    {
        $this->setMethod($method = (string) 'The Method');
        $this->getMethod()->shouldReturn($method);
    }
}