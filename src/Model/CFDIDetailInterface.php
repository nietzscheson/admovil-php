<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model;

use Nietzscheson\Admovil\Collection\ItemInterface;
use Nietzscheson\Admovil\Model\CFDIDetail\TaxesInterface;
use Nietzscheson\Admovil\Model\CFDIDetail\UnitInterface;
use Nietzscheson\Admovil\NotesInterface;

interface CFDIDetailInterface extends NotesInterface, TaxesInterface, UnitInterface, ItemInterface
{
    /**
     * @return string|null
     */
    public function getProductOrServiceKey(): ?string;

    /**
     * @param string
     */
    public function setProductOrServiceKey(string $key = null): void;

    /**
     * @return string|null
     */
    public function getCertificateNumber(): ?string;

    /**
     * @param string
     */
    public function setCertificateNumber(string $number = null): void;

    /**
     * @return float|null
     */
    public function getQuantity(): ?float;

    /**
     * @param float
     */
    public function setQuantity(float $quantity = null): void;

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string
     */
    public function setDescription(string $description = null): void;

    /**
     * @return int|null
     */
    public function getIdentificationNumber(): ?int;

    /**
     * @param int
     */
    public function setIdentificationNumber(int $id = null): void;

    /**
     * @return float|null
     */
    public function getDiscount(): ?float;

    /**
     * @param float
     */
    public function setDiscount(float $discount = null): void;

    /**
     * @return string|null
     */
    public function getPedimentNumber(): ?string;

    /**
     * @param string
     */
    public function setPedimentNumber(string $pedimentNumber = null): void;

    /**
     * @return string|null
     */
    public function getPredialAccount(): ?string;

    /**
     * @param string
     */
    public function setPredialAccount(string $predialAccount = null): void;
}