<?php

namespace Nietzscheson\Admovil\Item;

trait UnitAwareTrait
{

    /**
     * @var UnitInterface
     */
    private $unit;

    /**
     * @return UnitInterface
     */
    public function getUnit(): UnitInterface
    {
        return $this->unit;
    }

    /**
     * @param UnitInterface
     */
    public function setUnit(UnitInterface $unit): void
    {
        $this->unit = $unit;
    }
}