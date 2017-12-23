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

use Nietzscheson\Admovil\Item\Taxes;
use Nietzscheson\Admovil\Item\TaxesInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaxesFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): TaxesInterface
    {
        $taxes = new Taxes();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $taxes->setTaxBase($options['tax_base']);
        $taxes->setVatTransfer($options['vat_transfer']);
        $taxes->setVatWithheld($options['vat_withheld']);
        $taxes->setIepsTransfer($options['ieps_transfer']);
        $taxes->setIepsWithheld($options['ieps_withheld']);
        $taxes->setIsr($options['isr']);

        return $taxes;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('tax_base', '002')
            ->setDefault('vat_transfer', '16')
            ->setDefault('vat_withheld', '16')
            ->setDefault('ieps_transfer', '0')
            ->setDefault('ieps_withheld', '0')
            ->setDefault('isr', '0')
        ;
    }
}