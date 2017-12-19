<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

trait AddressAwareTrait
{

    /**
     * @var AddressInterface
     */
    private $address;

    /**
     * {@inheritdoc}
     */
    public function getAddress(): AddressInterface
    {
        return $this->address;
    }

    /**
     * {@inheritdoc}
     */
    public function setAddress(AddressInterface $address): void
    {
        $this->address = $address;
    }
}