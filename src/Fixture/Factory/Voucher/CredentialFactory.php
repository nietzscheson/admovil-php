<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory\Voucher
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nietzscheson\Admovil\Fixture\Factory\Voucher;

use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\Voucher\Credential;
use Nietzscheson\Admovil\Voucher\CredentialInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CredentialFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CredentialInterface
    {
        $credential = new Credential();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $credential->setUser($options['user']);
        $credential->setPassword($options['password']);
        $credential->setRfc($options['rfc']);
        $credential->setSystemId($options['system_id']);

        return $credential;
    }

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
          ->setDefault('user', 'Pruebas')
          ->setDefault('password', '10101010')
          ->setDefault('rfc', 'AAA010101AAA')
          ->setDefault('system_id', 'admovil-php')
        ;
    }
}