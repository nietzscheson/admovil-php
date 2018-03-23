<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory\Model\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Fixture\Factory\Model\CFDI;

use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\Model\CFDI\Payment\Payment;
use Nietzscheson\Admovil\Model\CFDI\Payment\PaymentFormInterface;
use Nietzscheson\Admovil\Model\CFDI\Payment\PaymentInterface;
use Nietzscheson\Admovil\Model\CFDI\Payment\PaymentMethodInterface;
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