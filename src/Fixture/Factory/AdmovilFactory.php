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

use Nietzscheson\Admovil\Admovil;
use Nietzscheson\Admovil\AdmovilInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdmovilFactory extends AbstractFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []){}

    /**
     * {@inheritdoc}
     */
    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('user', CredentialExampleFactoryInterface::USER)
            ->setDefault('password', CredentialExampleFactoryInterface::PASS)
            ->setDefault('rfc', CredentialExampleFactoryInterface::RFC)
            ->setDefault('system_id', CredentialExampleFactoryInterface::SYSTEMID)
        ;
    }
}