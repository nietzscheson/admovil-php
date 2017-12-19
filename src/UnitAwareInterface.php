<?php

namespace Nietzscheson\Admovil;

interface UnitAwareInterface
{
    /**
     * @return UnitInterface
     */
    public function getUnit(): UnitInterface;

    /**
     * @param UnitInterface $unit
     */
    public function setUnit(UnitInterface $unit): void;
}