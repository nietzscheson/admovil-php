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

use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\Model\CFDIDetail;
use Nietzscheson\Admovil\Model\CFDIDetailInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFDIDetailFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CFDIDetailInterface
    {
        $cfdiDetailData = new CFDIDetail();

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
        $cfdiDetailData->setUnitValue((float) $options['unit_value']);
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
            ->setDefault('quantity', 1.0)
            ->setDefault('description', 'The product description')
            ->setDefault('identification_number', 1)
            ->setDefault('unit_key', '18')
            ->setDefault('unit_name', 'Tambor')
            ->setDefault('unit_value', 100.00)
            ->setDefault('vat_transfer', 16.00)
            ->setDefault('vat_withheld', 16.00)
            ->setDefault('ieps_transfer', 0.0)
            ->setDefault('ieps_withheld', 0.0)
            ->setDefault('isr', 0.0)
            ->setDefault('discount', 0.0)
            ->setDefault('pediment_number', '')
            ->setDefault('predial_account', '')
            ->setDefault('notes', 'The notes')
        ;
    }
}