<?php

/**
 * @package Nietzscheson\Admovil\Model\CFDIDetail
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDIDetail;

interface TaxesInterface
{

    /**
     * @return float
     */
    public function getTaxBase(): ?float;

    /**
     * @param float
     */
    public function setTaxBase(float $taxBase = null): void;

    /**
     * @return float
     */
    public function getVatTransfer(): ?float;

    /**
     * @param float
     */
    public function setVatTransfer(float $vatTransfer = null): void;

    /**
     * @return float
     */
    public function getVATWithheld(): ?float;

    /**
     * @param float
     */
    public function setVATWithheld(float $vatWithHeld = null): void;

    /**
     * @return float
     */
    public function getIEPSTransfer(): ?float;

    /**
     * @param float
     */
    public function setIEPSTransfer(float $ipetsTransfer = null): void;

    /**
     * @return float
     */
    public function getIEPSWithheld(): ?float;

    /**
     * @param float
     */
    public function setIEPSWithheld(float $ipesWithheld = null): void;

    /**
     * @return float
     */
    public function getISR(): ?float;

    /**
     * @param float
     */
    public function setISR(float $isr = null): void;

}