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

use Nietzscheson\Admovil\CFDI\CFDIUseInterface;
use Nietzscheson\Admovil\Voucher\Voucher;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoucherFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public function create(array $options = []): object
    {
        $voucher = new Voucher();

        $options = $this->optionsResolver->resolve($options);

        $voucher->setBillingType($options['billing_type']);
        $voucher->setVoucherType($options['voucher_type']);
        $voucher->setBranchOffice($options['branch_type']);
        $voucher->setCurrency($options['currency']);
        $voucher->setExchangeRate($options['exchange_rate']);
        $voucher->setCfdiUse($options['cfdi_use']);
        $voucher->setConfirmation($options['confirmation']);
        $voucher->setNotes($options['notes']);

        $payment = new PaymentFactory();
        $businessname = new BusinessnameFactory();

        $voucher->setPayment($payment->create($options));
        $voucher->setBusinessName($businessname->create($options));

        return $voucher;

    }

    /**
     * {@inheritdoc}
     */
    protected function configureOptions(OptionsResolver $resolver): void
    {

        $resolver
            ->setDefault('billing_type', 'FA')
            ->setDefault('voucher_type', 'I')
            ->setDefault('branch_office', '')
            ->setDefault('currency', 'MEX')
            ->setDefault('exchange_rate', '19')
            ->setDefault('cfdi_use', CFDIUseInterface::UNDEFINED)
            ->setDefault('confirmation', '')
            ->setDefault('notes', 'The notes')
        ;

    }
}