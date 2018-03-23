<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory\Model
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Fixture\Factory;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractFactory implements FactoryInterface
{

    /**
     * @var OptionsResolver $optionsResolver
     */
    protected $optionsResolver;

    public function __construct()
    {
        $this->configureOptions($this->optionsResolver = new OptionsResolver());
    }

    abstract protected static function configureOptions(OptionsResolver $resolver): void;
}