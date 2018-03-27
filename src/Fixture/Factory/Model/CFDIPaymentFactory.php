<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory\Model
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Fixture\Factory\Model;

use DateTime;
use Nietzscheson\Admovil\CFDI\CFDI;
use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\Model\CFDI\Payment\PaymentFormInterface;
use Nietzscheson\Admovil\Model\CFDIPayment;
use Nietzscheson\Admovil\Model\CFDIPaymentInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use DateTimeImmutable;

class CFDIPaymentFactory extends AbstractFactory
{
    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CFDIPaymentInterface
    {
        $cfdiPayment = new CFDIPayment();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $cfdiPayment->setVoucher($options['voucher']);
        $cfdiPayment->setCurrency($options['currency']);
        $cfdiPayment->setExchangeRate($options['exchange_rate']);
        $cfdiPayment->setDate($options['date']);
        $cfdiPayment->setForm($options['form']);
        $cfdiPayment->setOperationNumber($options['operation_number']);

        return $cfdiPayment;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('voucher', function (Options $options){

                $cfdi = new CFDI();

                return $cfdi->execute(CFDIFactory::create())->getVoucher();
            })
            ->setDefault('currency', 'MXN')
            ->setDefault('exchange_rate', 1.0)
            ->setDefault('date', function(Options $options){
                return new DateTime('now');
            })
          ->setDefault('form', PaymentFormInterface::CASH)
          ->setDefault('operation_number', 'Operation Number')
        ;
    }
}