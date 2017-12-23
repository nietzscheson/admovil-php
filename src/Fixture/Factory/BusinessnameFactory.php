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

class BusinessnameFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public function create(array $options = []): BusinessnameInterface
    {
        $businessname = new Businessname();

        $options = $this->optionsResolver->resolve($options);

        $businessname->setId($options['id']);
        $businessname->setName($options['name']);
        $businessname->setRFC($options['rfc']);
        $businessname->setTaxId($options['tax_id']);
        $businessname->setReference($options['reference']);
        $businessname->setEmail($options['email']);

        $address = new AddressFactory();

        $businessname->setAddress($address->create());

        return $businessname;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('id', '112233')
            ->setDefault('name', function(Options $options): string {
                  return $this->faker->name . ' ' . $this->faker->lastName;
            })
            ->setDefault('rfc', 'AAA10101010AAA')
            ->setDefault('tax_id', 002)
            ->setDefault('reference', $this->faker->address)
            ->setDefault('email', $this->faker->email)
        ;
    }
}