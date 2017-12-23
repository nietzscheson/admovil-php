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
        $item->setUnit(UnitFactory::create());
        $item->setTaxes(TaxesFactory::create());
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
            ->setDefault('discount', '0.0')
            ->setDefault('pediment_number', '')
            ->setDefault('predial_account', '')
            ->setDefault('notes', 'The notes')
        ;
    }
}