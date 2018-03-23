<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDI\Businessname;

trait AddressAwareTrait
{

    /**
     * @var AddressInterface
     */
    private $address;

    /**
     * @return AddressInterface
     */
    public function getAddress(): AddressInterface
    {
        return $this->address;
    }

    /**
     * @param AddressInterface
     */
    public function setAddress(AddressInterface $address): void
    {
        $this->address = $address;
    }
}