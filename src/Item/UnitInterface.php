<?php

namespace Nietzscheson\Admovil\Item;

interface UnitInterface
{

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string
     */
    public function setName(string $name): void;

    /**
     * @return string
     */
    public function getKey(): string;

    /**
     * @param string
     */
    public function setKey(string $key): void;

    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @param string
     */
    public function setValue(string $value): void;
}