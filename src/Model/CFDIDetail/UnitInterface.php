<?php

/**
 * @package Nietzscheson\Admovil\Model\CFDIDetail
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDIDetail;

interface UnitInterface
{

    /**
     * @return string
     */
    public function getUnitName(): ?string;

    /**
     * @param string
     */
    public function setUnitName(string $name = null): void;

    /**
     * @return string
     */
    public function getUnitKey(): ?string;

    /**
     * @param string
     */
    public function setUnitKey(string $key = null): void;

    /**
     * @return string
     */
    public function getUnitValue(): ?string;

    /**
     * @param string
     */
    public function setUnitValue(string $value = null): void;
}