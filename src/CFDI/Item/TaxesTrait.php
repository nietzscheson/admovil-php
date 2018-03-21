<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\CFDI\Item;

trait TaxesTrait
{

    /**
     * @var float
     */
    protected $taxBase;

    /**
     * @var float
     */
    protected $vatTransfer;

    /**
     * @var float
     */
    protected $vatWithheld;

    /**
     * @var float
     */
    protected $iepsTransfer;

    /**
     * @var float
     */
    protected $iepsWithheld;

    /**
     * @var float
     */
    protected $isr;

    /**
     * @return float
     */
    public function getTaxBase(): ?float
    {
        return $this->taxBase;
    }

    /**
     * @param float
     */
    public function setTaxBase(float $taxBase = null): void
    {
        $this->taxBase = $taxBase;
    }

    /**
     * @return float
     */
    public function getVatTransfer(): ?float
    {
        return $this->vatTransfer;
    }

    /**
     * @param float
     */
    public function setVatTransfer(float $vatTransfer = null): void
    {
        $this->vatTransfer = $vatTransfer;
    }

    /**
     * @return float
     */
    public function getVatWithheld(): ?float
    {
        return $this->vatWithheld;
    }

    /**
     * @param float
     */
    public function setVatWithheld(float $vatWithheld = null): void
    {
        $this->vatWithheld = $vatWithheld;
    }

    /**
     * @return float
     */
    public function getIepsTransfer(): ?float
    {
        return $this->iepsTransfer;
    }

    /**
     * @param float
     */
    public function setIepsTransfer(float $iepsTransfer = null): void
    {
        $this->iepsTransfer = $iepsTransfer;
    }

    /**
     * @return float
     */
    public function getIepsWithheld(): ?float
    {
        return $this->iepsWithheld;
    }

    /**
     * @param float
     */
    public function setIepsWithheld(float $iepsWithheld = null): void
    {
        $this->iepsWithheld = $iepsWithheld;
    }

    /**
     * @return float
     */
    public function getIsr(): ?float
    {
        return $this->isr;
    }

    /**
     * @param float
     */
    public function setIsr(float $isr = null): void
    {
        $this->isr = $isr;
    }
}