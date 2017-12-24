<?php

namespace Nietzscheson\Admovil\Item;

trait UnitTrait
{

    /**
     * @var string
     */
    protected $unitName;

    /**
     * @var string
     */
    protected $unitKey;

    /**
     * @var string
     */
    protected $unitValue;

    /**
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * @param string
     */
    public function setUnitName(string $unitName): void
    {
        $this->unitName = $unitName;
    }

    /**
     * @return string
     */
    public function getUnitKey(): string
    {
        return $this->unitKey;
    }

    /**
     * @param string
     */
    public function setUnitKey(string $unitKey): void
    {
        $this->unitKey = $unitKey;
    }

    /**
     * @return string
     */
    public function getUnitValue(): string
    {
        return $this->unitValue;
    }

    /**
     * @param string
     */
    public function setUnitValue(string $unitValue): void
    {
        $this->unitValue = $unitValue;
    }
}