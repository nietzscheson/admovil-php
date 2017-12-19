<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

class Address implements AddressInterface
{

    /**
     * @var string
     */
    private $street;

    /**
     * @var int
     */
    private $codePostal;

    /**
     * @var string
     */
    private $neighborhood;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $exteriorNumber;

    /**
     * @var string
     */
    private $interiorNumber;

    /**
     * @var int
     */
    private $telephone;

    /**
     * @var string
     */
    private $fiscalResidency;

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return int
     */
    public function getCodePostal(): int
    {
        return $this->codePostal;
    }

    /**
     * @param int $codePostal
     */
    public function setCodePostal(int $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return string
     */
    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    /**
     * @param string $neighborhood
     */
    public function setNeighborhood(string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @param string $town
     */
    public function setTown(string $town): void
    {
        $this->town = $town;
    }

    /**
     * @return string
     */
    public function getExteriorNumber(): string
    {
        return $this->exteriorNumber;
    }

    /**
     * @param string $exteriorNumber
     */
    public function setExteriorNumber(string $exteriorNumber): void
    {
        $this->exteriorNumber = $exteriorNumber;
    }

    /**
     * @return string
     */
    public function getInteriorNumber(): string
    {
        return $this->interiorNumber;
    }

    /**
     * @param string $interiorNumber
     */
    public function setInteriorNumber(string $interiorNumber): void
    {
        $this->interiorNumber = $interiorNumber;
    }

    /**
     * @return int
     */
    public function getTelephone(): int
    {
        return $this->telephone;
    }

    /**
     * @param int $telephone
     */
    public function setTelephone(int $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getFiscalResidency(): string
    {
        return $this->fiscalResidency;
    }

    /**
     * @param string $fiscalResidency
     */
    public function setFiscalResidency(string $fiscalResidency): void
    {
        $this->fiscalResidency = $fiscalResidency;
    }
}