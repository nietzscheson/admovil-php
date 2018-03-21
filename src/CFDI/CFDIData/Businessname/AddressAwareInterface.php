<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\CFDI\CFDIData\Businessname;

interface AddressAwareInterface
{

    /**
     * @return AddressInterface
     */
    public function getAddress(): AddressInterface;

    /**
     * @param AddressInterface
     */
    public function setAddress(AddressInterface $address): void;
}