<?php

namespace Nietzscheson\Admovil;

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
     * @param UnitInterface $unit
     */
    public function setUnit(UnitInterface $unit): void
    {
        $this->unit = $unit;
    }
}