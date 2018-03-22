<?php

namespace Nietzscheson\Admovil\CFDI\CFDIDetailData;

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