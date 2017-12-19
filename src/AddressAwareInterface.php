<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

interface AddressAwareInterface
{

    /**
     * @return AddressInterface
     */
    public function getAddress(): AddressInterface;

    /**
     * @param $address
     */
    public function setAddress(AddressInterface $address): void;
}