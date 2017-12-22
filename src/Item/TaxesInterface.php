<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Item;

interface TaxesInterface
{

    /**
     * @return float
     */
    public function getTaxBase(): float;

    /**
     * @param float
     */
    public function setTaxBase(float $taxBase): void;

    /**
     * @return float
     */
    public function getVatTransfer(): float;

    /**
     * @param float
     */
    public function setVatTransfer(float $vatTransfer): void;

    /**
     * @return float
     */
    public function getVATWithheld(): float;

    /**
     * @param float
     */
    public function setVATWithheld(float $vatWithHeld): void;

    /**
     * @return float
     */
    public function getIEPSTransfer(): float;

    /**
     * @param float
     */
    public function setIEPSTransfer(float $ipetsTransfer): void;

    /**
     * @return float
     */
    public function getIEPSWithheld(): float;

    /**
     * @param float
     */
    public function setIEPSWithheld(float $ipesWithheld): void;

    /**
     * @return float
     */
    public function getISR(): float;

    /**
     * @param float
     */
    public function setISR(float $isr): void;

}