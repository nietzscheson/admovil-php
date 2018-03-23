<?php

/**
 * @package Nietzscheson\Admovil\Model\CFDI\Businessname
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDI\Businessname;

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
     * {@inheritdoc}
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * {@inheritdoc}
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * {@inheritdoc}
     */
    public function getCodePostal() :int
    {
        return $this->codePostal;
    }

    /**
     * {@inheritdoc}
     */
    public function setCodePostal(int $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * {@inheritdoc}
     */
    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    /**
     * {@inheritdoc}
     */
    public function setNeighborhood(string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    /**
     * {@inheritdoc}
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * {@inheritdoc}
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * {@inheritdoc}
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * {@inheritdoc}
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * {@inheritdoc}
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * {@inheritdoc}
     */
    public function setTown(string $town): void
    {
        $this->town = $town;
    }

    /**
     * {@inheritdoc}
     */
    public function getExteriorNumber(): string
    {
        return $this->exteriorNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setExteriorNumber(string $exteriorNumber): void
    {
        $this->exteriorNumber = $exteriorNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getInteriorNumber(): string
    {
        return $this->interiorNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setInteriorNumber(string $interiorNumber): void
    {
        $this->interiorNumber = $interiorNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getTelephone(): int
    {
        return $this->telephone;
    }

    /**
     * {@inheritdoc}
     */
    public function setTelephone(int $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * {@inheritdoc}
     */
    public function getFiscalResidency(): string
    {
        return $this->fiscalResidency;
    }

    /**
     * {@inheritdoc}
     */
    public function setFiscalResidency(string $fiscalResidency): void
    {
        $this->fiscalResidency = $fiscalResidency;
    }
}