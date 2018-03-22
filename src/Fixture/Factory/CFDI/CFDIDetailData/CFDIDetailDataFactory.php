<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nietzscheson\Admovil\Fixture\Factory\CFDI\CFDIDetailData;

use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\CFDI\CFDIDetailData\CFDIDetailData;
use Nietzscheson\Admovil\CFDI\CFDIDetailData\CFDIDetailDataInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFDIDetailDataFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CFDIDetailDataInterface
    {
        $cfdiDetailData = new CFDIDetailData();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $cfdiDetailData->setProductOrServiceKey($options['product_or_service_key']);
        $cfdiDetailData->setCertificateNumber($options['certificate_number']);
        $cfdiDetailData->setQuantity($options['quantity']);
        $cfdiDetailData->setDescription($options['description']);
        $cfdiDetailData->setIdentificationNumber($options['identification_number']);
        $cfdiDetailData->setUnitKey($options['unit_key']);
        $cfdiDetailData->setUnitName($options['unit_name']);
        $cfdiDetailData->setUnitValue($options['unit_value']);
        $cfdiDetailData->setVatTransfer($options['vat_transfer']);
        $cfdiDetailData->setVatWithheld($options['vat_withheld']);
        $cfdiDetailData->setIepsTransfer($options['ieps_transfer']);
        $cfdiDetailData->setIepsWithheld($options['ieps_withheld']);
        $cfdiDetailData->setIsr($options['isr']);
        $cfdiDetailData->setDiscount($options['discount']);
        $cfdiDetailData->setPedimentNumber($options['pediment_number']);
        $cfdiDetailData->setPredialAccount($options['predial_account']);
        $cfdiDetailData->setNotes($options['notes']);

        return $cfdiDetailData;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('product_or_service_key', '01010101')
            ->setDefault('certificate_number', '')
            ->setDefault('quantity', '1')
            ->setDefault('description', 'The product description')
            ->setDefault('identification_number', '1')
            ->setDefault('unit_key', '18')
            ->setDefault('unit_name', 'Tambor de cincuenta y cinco galones (EUA)')
            ->setDefault('unit_value', '100.00')
            ->setDefault('vat_transfer', '16')
            ->setDefault('vat_withheld', '16')
            ->setDefault('ieps_transfer', '0')
            ->setDefault('ieps_withheld', '0')
            ->setDefault('isr', '0')
            ->setDefault('discount', '0.0')
            ->setDefault('pediment_number', '')
            ->setDefault('predial_account', '')
            ->setDefault('notes', 'The notes')
        ;
    }
}