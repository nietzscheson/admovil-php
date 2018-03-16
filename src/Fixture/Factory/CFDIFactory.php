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
use Nietzscheson\Admovil\CFDI\CFDI;
use Nietzscheson\Admovil\CFDI\CFDIInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFDIFactory extends AdmovilFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CFDIInterface
    {
        $cfdi = new CFDI();

        $optionsResolver = new OptionsResolver();
        parent::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $cfdi->setUser($options['user']);
        $cfdi->setPassword($options['password']);
        $cfdi->setRfc($options['rfc']);
        $cfdi->setSystemId($options['system_id']);

        return $cfdi;
    }
}