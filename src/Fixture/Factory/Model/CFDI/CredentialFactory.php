<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory\Model\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Fixture\Factory\Model\CFDI;

use Nietzscheson\Admovil\Fixture\Factory\AbstractFactory;
use Nietzscheson\Admovil\Model\CFDI\Credential;
use Nietzscheson\Admovil\Model\CFDI\CredentialInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CredentialFactory extends AbstractFactory implements CredentialFactoryInterface
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
          ->setDefault('user', self::USER)
          ->setDefault('password', self::PASS)
          ->setDefault('rfc', self::RFC)
          ->setDefault('system_id', self::SYSTEMID)
        ;
    }
}