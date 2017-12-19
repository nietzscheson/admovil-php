<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

class Item implements ItemInterface
{

    use NotesTrait;
    use TaxesAwareTrait;
    use UnitAwareTrait;

    /**
     * @var int
     */
    private $voucher;

    /**
     * @var string
     */
    private $productOrServiceKey;

    /**
     * @var int
     */
    private $certificateNumber;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $identificationNumber;

    /**
     * @var float
     */
    private $discount;

    /**
     * @var string
     */
    private $pedimentNumber;

    /**
     * @var string
     */
    private $accountPredial;

    /**
     * @return int
     */
    public function getVoucher(): int
    {
        return $this->voucher;
    }

    /**
     * @param int $voucher
     */
    public function setVoucher(int $voucher): void
    {
        $this->voucher = $voucher;
    }

    /**
     * @return string
     */
    public function getProductOrServiceKey(): string
    {
        return $this->productOrServiceKey;
    }

    /**
     * @param string $productOrServiceKey
     */
    public function setProductOrServiceKey(string $productOrServiceKey): void
    {
        $this->productOrServiceKey = $productOrServiceKey;
    }

    /**
     * @return int
     */
    public function getCertificateNumber(): int
    {
        return $this->certificateNumber;
    }

    /**
     * @param int $certificateNumber
     */
    public function setCertificateNumber(int $certificateNumber): void
    {
        $this->certificateNumber = $certificateNumber;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getIdentificationNumber(): int
    {
        return $this->identificationNumber;
    }

    /**
     * @param int $identificationNumber
     */
    public function setIdentificationNumber(int $identificationNumber): void
    {
        $this->identificationNumber = $identificationNumber;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     */
    public function setDiscount(float $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return string
     */
    public function getPedimentNumber(): string
    {
        return $this->pedimentNumber;
    }

    /**
     * @param string $pedimentNumber
     */
    public function setPedimentNumber(string $pedimentNumber): void
    {
        $this->pedimentNumber = $pedimentNumber;
    }

    /**
     * @return string
     */
    public function getAccountPredial(): string
    {
        return $this->accountPredial;
    }

    /**
     * @param string $accountPredial
     */
    public function setAccountPredial(string $accountPredial): void
    {
        $this->accountPredial = $accountPredial;
    }
}