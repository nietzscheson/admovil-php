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

use Nietzscheson\Admovil\Voucher\Businessname\Businessname;
use Nietzscheson\Admovil\Voucher\Businessname\BusinessnameInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Faker\Factory;

class BusinessnameFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): BusinessnameInterface
    {
        $businessname = new Businessname();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $businessname->setId($options['id']);
        $businessname->setName($options['name']);
        $businessname->setRFC($options['rfc']);
        $businessname->setTaxId($options['tax_id']);
        $businessname->setReference($options['reference']);
        $businessname->setEmail($options['email']);

        $businessname->setAddress(AddressFactory::create());

        return $businessname;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $faker = Factory::create();

        $resolver
            ->setDefault('id', '112233')
            ->setDefault('name', function(Options $options) use ($faker): string {
                  return $faker->name . ' ' . $faker->lastName;
            })
            ->setDefault('rfc', 'AAA10101010AAA')
            ->setDefault('tax_id', 002)
            ->setDefault('reference', $faker->address)
            ->setDefault('email', $faker->email)
        ;
    }
}