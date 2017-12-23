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
    public function create(array $options = [])
    {
        $admovil = new Admovil();

        $options = $this->optionsResolver->resolve($options);

        $admovil->setUser($options['user']);
        $admovil->setPassword($options['password']);
        $admovil->setRfc($options['rfc']);
        $admovil->setSystemId($options['system_id']);

        return $admovil;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('user', 'Pruebas')
            ->setDefault('password', '10101010')
            ->setDefault('rfc', 'AAA010101AAA')
            ->setDefault('system_id', 'admovil-php')
        ;
    }
}