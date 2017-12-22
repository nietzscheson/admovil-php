<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nietzscheson\Admovil\Fixture\Factory;

use Nietzscheson\Admovil\Voucher\Payment\Payment;
use Nietzscheson\Admovil\Voucher\Payment\PaymentFormInterface;
use Nietzscheson\Admovil\Voucher\Payment\PaymentMethodInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaymentFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public function create(array $options = [])
    {
        $payment = new Payment();

        $options = $this->optionsResolver->resolve($options);

        $payment->setCondition($options['condition']);
        $payment->setForm($options['form']);
        $payment->setAccount($options['account']);
        $payment->setMethod($options['method']);

        return $payment;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('condition', 'The condition')
            ->setDefault('form', PaymentFormInterface::CFDI_PAYMENT_FORM_UNDEFINED)
            ->setDefault('account', '112233445566')
            ->setDefault('method', PaymentMethodInterface::CFDI_PAYMENT_METHOD_PPD)
        ;
    }
}