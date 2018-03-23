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

trait UnitTrait
{

    /**
     * @var string|null
     */
    protected $unitName;

    /**
     * @var string|null
     */
    protected $unitKey;

    /**
     * @var string|null
     */
    protected $unitValue;

    /**
     * @return string
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * @param string
     */
    public function setUnitName(string $unitName = null): void
    {
        $this->unitName = $unitName;
    }

    /**
     * @return string
     */
    public function getUnitKey(): ?string
    {
        return $this->unitKey;
    }

    /**
     * @param string
     */
    public function setUnitKey(string $unitKey = null): void
    {
        $this->unitKey = $unitKey;
    }

    /**
     * @return string
     */
    public function getUnitValue(): ?string
    {
        return $this->unitValue;
    }

    /**
     * @param string
     */
    public function setUnitValue(string $unitValue = null): void
    {
        $this->unitValue = $unitValue;
    }
}