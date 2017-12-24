<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Item;
use Nietzscheson\Admovil\NotesTrait;

class Item implements ItemInterface
{
    use NotesTrait;
    use TaxesTrait;
    use UnitTrait;

    /**
     * @var string
     */
    private $productOrServiceKey;

    /**
     * @var string
     */
    private $certificateNumber;

    /**
     * @var float
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
    private $predialAccount;

    /**
     * {@inheritdoc}
     */
    public function getProductOrServiceKey(): string
    {
        return $this->productOrServiceKey;
    }

    /**
     * {@inheritdoc}
     */
    public function setProductOrServiceKey(string $productOrServiceKey): void
    {
        $this->productOrServiceKey = $productOrServiceKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getCertificateNumber(): string
    {
        return $this->certificateNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setCertificateNumber(string $certificateNumber): void
    {
        $this->certificateNumber = $certificateNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentificationNumber(): int
    {
        return $this->identificationNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setIdentificationNumber(int $identificationNumber): void
    {
        $this->identificationNumber = $identificationNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscount(float $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * {@inheritdoc}
     */
    public function getPedimentNumber(): string
    {
        return $this->pedimentNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setPedimentNumber(string $pedimentNumber): void
    {
        $this->pedimentNumber = $pedimentNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getPredialAccount(): string
    {
        return $this->predialAccount;
    }

    /**
     * {@inheritdoc}
     */
    public function setPredialAccount(string $predialAccount): void
    {
        $this->predialAccount = $predialAccount;
    }
}