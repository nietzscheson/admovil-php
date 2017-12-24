<?php

namespace Nietzscheson\Admovil\Item;

interface UnitInterface
{

    /**
     * @return string
     */
    public function getUnitName(): string;

    /**
     * @param string
     */
    public function setUnitName(string $name): void;

    /**
     * @return string
     */
    public function getUnitKey(): string;

    /**
     * @param string
     */
    public function setUnitKey(string $key): void;

    /**
     * @return string
     */
    public function getUnitValue(): string;

    /**
     * @param string
     */
    public function setUnitValue(string $value): void;
}