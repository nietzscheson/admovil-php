<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\Businessname
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Fixture\Factory\Model\CFDI\Businessname;

use Faker\Factory;
use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\Model\CFDI\Businessname\Address;
use Nietzscheson\Admovil\Model\CFDI\Businessname\AddressInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): AddressInterface
    {
        $address = new Address();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $address->setStreet($options['street']);
        $address->setCodePostal($options['code_postal']);
        $address->setNeighborhood($options['neighborhood']);
        $address->setState($options['state']);
        $address->setCity($options['city']);
        $address->setTown($options['town']);
        $address->setExteriorNumber($options['exterior_number']);
        $address->setInteriorNumber($options['interior_number']);
        $address->setTelephone($options['telephone']);
        $address->setFiscalResidency($options['fiscal_residency']);

        return $address;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $faker = Factory::create();

        $resolver
            ->setDefault('street', $faker->streetName)
            ->setDefault('code_postal', 77500)
            ->setDefault('neighborhood', 'Neighborhood')
            ->setDefault('state', 'The State')
            ->setDefault('city', $faker->city)
            ->setDefault('town', 'The Town')
            ->setDefault('exterior_number', 'Exterior Number')
            ->setDefault('interior_number', 'Interior Number')
            ->setDefault('telephone', 9999999999)
            ->setDefault('fiscal_residency', 'MEX')
        ;
    }
}