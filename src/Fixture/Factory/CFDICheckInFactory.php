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

use Nietzscheson\Admovil\CFDI\CFDICheckIn;
use Nietzscheson\Admovil\CFDI\CFDICheckInInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFDICheckInFactory extends AdmovilFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CFDICheckInInterface
    {
        $cfdiCheckiIn = new CFDICheckIn();

        $optionsResolver = new OptionsResolver();
        parent::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $cfdiCheckiIn->setUser($options['user']);
        $cfdiCheckiIn->setPassword($options['password']);
        $cfdiCheckiIn->setRfc($options['rfc']);
        $cfdiCheckiIn->setSystemId($options['system_id']);

        return $cfdiCheckiIn;
    }
}