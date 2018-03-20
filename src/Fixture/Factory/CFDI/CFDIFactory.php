<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nietzscheson\Admovil\Fixture\Factory\CFDI;

use Nietzscheson\Admovil\CFDI\CFDI;
use Nietzscheson\Admovil\CFDI\CFDIInterface;
use Nietzscheson\Admovil\Fixture\Factory\AdmovilFactory;
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

        return $cfdi;
    }
}