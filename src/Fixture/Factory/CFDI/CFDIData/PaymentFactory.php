<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData;

use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\CFDI\CFDIData\Payment\Payment;
use Nietzscheson\Admovil\CFDI\CFDIData\Payment\PaymentFormInterface;
use Nietzscheson\Admovil\CFDI\CFDIData\Payment\PaymentInterface;
use Nietzscheson\Admovil\CFDI\CFDIData\Payment\PaymentMethodInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaymentFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): PaymentInterface
    {
        $payment = new Payment();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $payment->setCondition($options['condition']);
        $payment->setForm($options['form']);
        $payment->setAccount($options['account']);
        $payment->setMethod($options['method']);

        return $payment;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('condition', 'Condition')
            ->setDefault('form', PaymentFormInterface::UNDEFINED)
            ->setDefault('account', '999888777666555')
            ->setDefault('method', PaymentMethodInterface::PPD)
        ;
    }
}