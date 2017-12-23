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

use Nietzscheson\Admovil\Item\Unit;
use Nietzscheson\Admovil\Item\UnitInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UnitFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): UnitInterface
    {
        $unit = new Unit();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $unit->setName($options['name']);
        $unit->setKey($options['key']);
        $unit->setValue($options['value']);

        return $unit;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('name', 'Tambor de cincuenta y cinco galones (EUA)')
            ->setDefault('key', '18')
            ->setDefault('value', '100.00')
        ;
    }
}