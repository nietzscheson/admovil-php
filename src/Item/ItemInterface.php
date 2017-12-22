<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Item;

use Nietzscheson\Admovil\NotesInterface;

interface ItemInterface extends NotesInterface, TaxesAwareInterface, UnitAwareInterface
{
    /**
     * @return string
     */
    public function getProductOrServiceKey(): string;

    /**
     * @param string
     */
    public function setProductOrServiceKey(string $key): void;

    /**
     * @return string
     */
    public function getCertificateNumber(): string;

    /**
     * @param string
     */
    public function setCertificateNumber(string $number): void;

    /**
     * @return float
     */
    public function getQuantity(): float;

    /**
     * @param float
     */
    public function setQuantity(float $quantity): void;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string
     */
    public function setDescription(string $description): void;

    /**
     * @return int
     */
    public function getIdentificationNumber(): int;

    /**
     * @param int $id
     */
    public function setIdentificationNumber(int $id): void;

    /**
     * @return float
     */
    public function getDiscount(): float;

    /**
     * @param float
     */
    public function setDiscount(float $discount): void;

    /**
     * @return string
     */
    public function getPedimentNumber(): string;

    /**
     * @param string
     */
    public function setPedimentNumber(string $pedimentNumber): void;

    /**
     * @return string
     */
    public function getPredialAccount(): string;

    /**
     * @param string
     */
    public function setPredialAccount(string $predialAccount): void;
}