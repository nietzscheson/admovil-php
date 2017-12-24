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

use Nietzscheson\Admovil\Item\Item;
use Nietzscheson\Admovil\Item\ItemInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): ItemInterface
    {
        $item = new Item();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $item->setProductOrServiceKey($options['product_or_service_key']);
        $item->setCertificateNumber($options['certificate_number']);
        $item->setQuantity($options['quantity']);
        $item->setDescription($options['description']);
        $item->setIdentificationNumber($options['identification_number']);
        $item->setUnitKey($options['unit_key']);
        $item->setUnitName($options['unit_name']);
        $item->setUnitValue($options['unit_value']);
        $item->setVatTransfer($options['vat_transfer']);
        $item->setVatWithheld($options['vat_withheld']);
        $item->setIepsTransfer($options['ieps_transfer']);
        $item->setIepsWithheld($options['ieps_withheld']);
        $item->setIsr($options['isr']);
        $item->setDiscount($options['discount']);
        $item->setPedimentNumber($options['pediment_number']);
        $item->setPredialAccount($options['predial_account']);
        $item->setNotes($options['notes']);

        return $item;
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