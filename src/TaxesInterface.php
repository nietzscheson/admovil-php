<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

interface TaxesInterface
{

    /**
     * @return float
     */
    public function getTaxBase(): float;

    /**
     * @param float $taxBase
     */
    public function setTaxBase(float $taxBase): void;

    /**
     * @return float
     */
    public function getVatTransfer(): float;

    /**
     * @param float $vatTransfer
     */
    public function setVatTransfer(float $vatTransfer): void;

    /**
     * @return float
     */
    public function getVATWithheld(): float;

    /**
     * @param float $vatWithHeld
     */
    public function setVATWithheld(float $vatWithHeld): void;

    /**
     * @return float
     */
    public function getIEPSTransfer(): float;

    /**
     * @param float $ipetsTransfer
     */
    public function setIEPSTransfer(float $ipetsTransfer): void;

    /**
     * @return float
     */
    public function getIEPSWithheld(): float;

    /**
     * @param float $ipesWithheld
     */
    public function setIEPSWithheld(float $ipesWithheld): void;

    /**
     * @return float
     */
    public function getISR(): float;

    /**
     * @param float $isr
     */
    public function setISR(float $isr): void;

}