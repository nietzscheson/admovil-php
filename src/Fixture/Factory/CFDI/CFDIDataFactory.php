<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nietzscheson\Admovil\Fixture\Factory\CFDI;

use Nietzscheson\Admovil\CFDI\CFDIUseInterface;
use Nietzscheson\Admovil\CFDI\CFDITypeInterface;
use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\Businessname\BusinessnameFactory;
use Nietzscheson\Admovil\CFDI\CFDIData;
use Nietzscheson\Admovil\CFDI\CFDIDataInterface;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\CredentialFactory;
use Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIData\PaymentFactory;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFDIDataFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CFDIDataInterface
    {
        $voucher = new CFDIData();
        $credendialFactory = CredentialFactory::create();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $voucher->setUser($credendialFactory->getUser());
        $voucher->setPassword($credendialFactory->getPassword());
        $voucher->setRFC($credendialFactory->getRFC());
        $voucher->setSystemId($credendialFactory->getSystemId());
        $voucher->setBillingType($options['billing_type']);
        $voucher->setVoucherType($options['voucher_type']);
        $voucher->setBranchOffice($options['branch_office']);
        $voucher->setCurrency($options['currency']);
        $voucher->setExchangeRate($options['exchange_rate']);
        $voucher->setCfdiUse($options['cfdi_use']);
        $voucher->setConfirmation($options['confirmation']);
        $voucher->setNotes($options['notes']);

        $voucher->setPayment(PaymentFactory::create());
        $voucher->setBusinessName(BusinessnameFactory::create());
        
        return $voucher;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {

        $resolver
            ->setDefault('billing_type', 'FA')
            ->setDefault('voucher_type', CFDITypeInterface::INGRESS)
            ->setDefault('branch_office', '')
            ->setDefault('notes', 'The notes')
            ->setDefault('currency', 'MXN')
            ->setDefault('exchange_rate', '19')
            ->setDefault('cfdi_use', CFDIUseInterface::UNDEFINED)
            ->setDefault('confirmation', '')
        ;
    }
}