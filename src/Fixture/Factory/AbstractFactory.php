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

use Symfony\Component\OptionsResolver\OptionsResolver;

use Faker\Factory;

abstract class AbstractFactory implements FactoryInterface
{

    protected $faker;
    protected $optionsResolver;

    public function __construct()
    {
        $this->faker = Factory::create();
        $this->optionsResolver = new OptionsResolver();

        $this->configureOptions($this->optionsResolver);
    }

    abstract protected function configureOptions(OptionsResolver $resolver): void;

}