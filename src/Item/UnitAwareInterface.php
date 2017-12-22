<?php

namespace Nietzscheson\Admovil\Item;

interface UnitAwareInterface
{
    /**
     * @return UnitInterface
     */
    public function getUnit(): UnitInterface;

    /**
     * @param UnitInterface
     */
    public function setUnit(UnitInterface $unit): void;
}