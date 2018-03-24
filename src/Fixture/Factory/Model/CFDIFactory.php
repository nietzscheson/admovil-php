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

use Nietzscheson\Admovil\Model\CFDI;
use Nietzscheson\Admovil\CFDI\CFDIUseInterface;
use Nietzscheson\Admovil\CFDI\CFDITypeInterface;
use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\Businessname\BusinessnameFactory;
use Nietzscheson\Admovil\Model\CFDIInterface;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\CredentialFactory;
use Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\PaymentFactory;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFDIFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CFDIInterface
    {
        $cfdi = new CFDI();
        $credendialFactory = CredentialFactory::create();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $cfdi->setUser($credendialFactory->getUser());
        $cfdi->setPassword($credendialFactory->getPassword());
        $cfdi->setRFC($credendialFactory->getRFC());
        $cfdi->setSystemId($credendialFactory->getSystemId());
        $cfdi->setBillingType($options['billing_type']);
        $cfdi->setVoucherType($options['voucher_type']);
        $cfdi->setBranchOffice($options['branch_office']);
        $cfdi->setCurrency($options['currency']);
        $cfdi->setExchangeRate($options['exchange_rate']);
        $cfdi->setCfdiUse($options['cfdi_use']);
        $cfdi->setConfirmation($options['confirmation']);
        $cfdi->setNotes($options['notes']);

        $cfdi->setPayment(PaymentFactory::create());
        $cfdi->setBusinessName(BusinessnameFactory::create());
        
        return $cfdi;
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
            ->setDefault('exchange_rate', 1.0)
            ->setDefault('cfdi_use', CFDIUseInterface::UNDEFINED)
            ->setDefault('confirmation', '')
        ;
    }
}