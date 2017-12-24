<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Item;

trait TaxesTrait
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
     * @return float
     */
    public function getTaxBase(): float
    {
        return $this->taxBase;
    }

    /**
     * @param float
     */
    public function setTaxBase(float $taxBase): void
    {
        $this->taxBase = $taxBase;
    }

    /**
     * @return float
     */
    public function getVatTransfer(): float
    {
        return $this->vatTransfer;
    }

    /**
     * @param float
     */
    public function setVatTransfer(float $vatTransfer): void
    {
        $this->vatTransfer = $vatTransfer;
    }

    /**
     * @return float
     */
    public function getVatWithheld(): float
    {
        return $this->vatWithheld;
    }

    /**
     * @param float
     */
    public function setVatWithheld(float $vatWithheld): void
    {
        $this->vatWithheld = $vatWithheld;
    }

    /**
     * @return float
     */
    public function getIepsTransfer(): float
    {
        return $this->iepsTransfer;
    }

    /**
     * @param float
     */
    public function setIepsTransfer(float $iepsTransfer): void
    {
        $this->iepsTransfer = $iepsTransfer;
    }

    /**
     * @return float
     */
    public function getIepsWithheld(): float
    {
        return $this->iepsWithheld;
    }

    /**
     * @param float
     */
    public function setIepsWithheld(float $iepsWithheld): void
    {
        $this->iepsWithheld = $iepsWithheld;
    }

    /**
     * @return float
     */
    public function getIsr(): float
    {
        return $this->isr;
    }

    /**
     * @param float
     */
    public function setIsr(float $isr): void
    {
        $this->isr = $isr;
    }
}