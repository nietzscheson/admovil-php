<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

interface ItemInterface extends NotesInterface, TaxesAwareInterface, UnitAwareInterface
{

    /**
     * @return int
     */
    public function getVoucher(): int;

    /**
     * @param int $voucher
     */
    public function setVoucher(int $voucher): void;

    /**
     * @return string
     */
    public function getProductOrServiceKey(): string;

    /**
     * @param string $key
     */
    public function setProductOrServiceKey(string $key): void;

    /**
     * @return int
     */
    public function getCertificateNumber(): int;

    /**
     * @param int $number
     */
    public function setCertificateNumber(int $number): void;

    /**
     * @return int
     */
    public function getQuantity(): int;

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string $description
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
     * @param float $discount
     */
    public function setDiscount(float $discount): void;

    /**
     * @return string
     */
    public function getPedimentNumber(): string;

    /**
     * @param string $pedimentNumber
     */
    public function setPedimentNumber(string $pedimentNumber): void;

    /**
     * @return string
     */
    public function getAccountPredial(): string;

    /**
     * @param string $accountPredial
     */
    public function setAccountPredial(string $accountPredial): void;
}