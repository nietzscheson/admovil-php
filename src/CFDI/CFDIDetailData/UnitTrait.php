<?php

namespace Nietzscheson\Admovil\CFDI\CFDIDetailData;

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