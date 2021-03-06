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

interface AddressInterface
{

    /**
     * @return string
     */
    public function getStreet(): string;

    /**
     * @param string
     */
    public function setStreet(string $street): void;

    /**
     * @return int
     */
    public function getCodePostal(): int;

    /**
     * @param int
     */
    public function setCodePostal(int $codePostal): void;

    /**
     * @return string
     */
    public function getNeighborhood(): string;

    /**
     * @param string
     */
    public function setNeighborhood(string $neighborhood): void;

    /**
     * @return string
     */
    public function getState(): string;

    /**
     * @param string
     */
    public function setState(string $state): void;

    /**
     * @return string
     */
    public function getCity(): string;

    /**
     * @param string
     */
    public function setCity(string $city): void;

    /**
     * @return string
     */
    public function getTown(): string;

    /**
     * @param string
     */
    public function setTown(string $town): void;

    /**
     * @return string
     */
    public function getExteriorNumber(): string;

    /**
     * @param string
     */
    public function setExteriorNumber(string $exteriorNumber): void;

    /**
     * @return string
     */
    public function getInteriorNumber(): string;

    /**
     * @param string
     */
    public function setInteriorNumber(string $interiorNumber): void;

    /**
     * @return int
     */
    public function getTelephone(): int;

    /**
     * @param int
     */
    public function setTelephone(int $telephone): void;

    /**
     * @return string
     */
    public function getFiscalResidency(): string;

    /**
     * @param string
     */
    public function setFiscalResidency(string $residency): void;

}