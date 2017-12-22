<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Item;

class Taxes implements TaxesInterface
{

    /**
     * @var float
     */
    private $taxBase;

    /**
     * @var float
     */
    private $vatTransfer;

    /**
     * @var float
     */
    private $vatWithheld;

    /**
     * @var float
     */
    private $iepsTransfer;

    /**
     * @var float
     */
    private $iepsWithheld;

    /**
     * @var float
     */
    private $isr;

    /**
     * {@inheritdoc}
     */
    public function getTaxBase(): float
    {
        return $this->taxBase;
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxBase(float $taxBase): void
    {
        $this->taxBase = $taxBase;
    }

    /**
     * {@inheritdoc}
     */
    public function getVatTransfer(): float
    {
        return $this->vatTransfer;
    }

    /**
     * {@inheritdoc}
     */
    public function setVatTransfer(float $vatTransfer): void
    {
        $this->vatTransfer = $vatTransfer;
    }

    /**
     * {@inheritdoc}
     */
    public function getVatWithheld(): float
    {
        return $this->vatWithheld;
    }

    /**
     * {@inheritdoc}
     */
    public function setVatWithheld(float $vatWithheld): void
    {
        $this->vatWithheld = $vatWithheld;
    }

    /**
     * {@inheritdoc}
     */
    public function getIepsTransfer(): float
    {
        return $this->iepsTransfer;
    }

    /**
     * {@inheritdoc}
     */
    public function setIepsTransfer(float $iepsTransfer): void
    {
        $this->iepsTransfer = $iepsTransfer;
    }

    /**
     * {@inheritdoc}
     */
    public function getIepsWithheld(): float
    {
        return $this->iepsWithheld;
    }

    /**
     * {@inheritdoc}
     */
    public function setIepsWithheld(float $iepsWithheld): void
    {
        $this->iepsWithheld = $iepsWithheld;
    }

    /**
     * {@inheritdoc}
     */
    public function getIsr(): float
    {
        return $this->isr;
    }

    /**
     * {@inheritdoc}
     */
    public function setIsr(float $isr): void
    {
        $this->isr = $isr;
    }
}