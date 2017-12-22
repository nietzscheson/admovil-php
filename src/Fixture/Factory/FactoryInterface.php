<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Fixture\Factory;

interface FactoryInterface
{
    /**
     * @param array $options
     *
     * @return object
     */
    public function create(array $options = []);

}