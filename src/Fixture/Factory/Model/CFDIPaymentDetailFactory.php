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

use Nietzscheson\Admovil\CFDI\CFDI;
use Nietzscheson\Admovil\CFDI\CFDICheckIn;
use Nietzscheson\Admovil\CFDI\CFDIDetail;
use Nietzscheson\Admovil\CFDI\CFDIPayment;
use Nietzscheson\Admovil\Collection\Items;
use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\CredentialFactory;
use Nietzscheson\Admovil\Model\CFDIPaymentDetail;
use Nietzscheson\Admovil\Model\CFDIPaymentDetailInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFDIPaymentDetailFactory extends AbstractFactory
{
    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CFDIPaymentDetailInterface
    {
        $cfdiPaymentDetail = new CFDIPaymentDetail();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $cfdiPaymentDetail->setVoucher($options['voucher']);
        $cfdiPaymentDetail->setId($options['payment_id']);
        $cfdiPaymentDetail->setUuid($options['uuid']);
        $cfdiPaymentDetail->setCurrency($options['currency']);
        $cfdiPaymentDetail->setExchangeRate($options['exchange_rate']);
        $cfdiPaymentDetail->setSerie($options['serie']);
        $cfdiPaymentDetail->setFolio($options['folio']);
        $cfdiPaymentDetail->setPartialityNumber($options['partiality_number']);
        $cfdiPaymentDetail->setPreviousBalanceAmount($options['previous_balanace_amount']);
        $cfdiPaymentDetail->setAmountPaid($options['amount_paid']);

        return $cfdiPaymentDetail;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
         $cfdi = new CFDI();

         $voucher = $cfdi->execute(CFDIFactory::create());

         $cfdiDetail = new CFDIDetail();

         $items = new Items();

         $items->addItem(CFDIDetailFactory::create());

         $cfdiDetail->execute($items, $voucher);

         $cfdiCheckin = new CFDICheckIn();

         $cfdiCheckinResult = $cfdiCheckin->execute($voucher, CredentialFactory::create());

         $cfdiPayment = new CFDIPayment();

         $paymentId = $cfdiPayment->execute(CFDIPaymentFactory::create(['voucher' => $voucher->getVoucher()]))->getId();

        $resolver
            ->setDefault('voucher', function (Options $options) use ($voucher){

                return $voucher->getVoucher();
            })
            ->setDefault('payment_id', function (Options $options) use ($paymentId){
                return $paymentId;
            })
            ->setDefault('uuid', function(Options $options) use ($cfdiCheckinResult){
                return $cfdiCheckinResult->getUUID();
            })
            ->setDefault('currency', 'MXN')
            ->setDefault('exchange_rate', 1.0)
            ->setDefault('serie', null)
            ->setDefault('folio', null)
            ->setDefault('partiality_number', '1')
            ->setDefault('previous_balanace_amount', 100.0)
            ->setDefault('amount_paid', 100.0)
        ;
    }
}