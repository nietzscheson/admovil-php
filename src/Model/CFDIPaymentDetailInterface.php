<?php

/**
 * @package Nietzscheson\Admovil\Model
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model;

use Nietzscheson\Admovil\Currency\CurrencyInterface;
use Nietzscheson\Admovil\Currency\ExchangeRateInterface;
use Nietzscheson\Admovil\Payment\PaymentIdInterface;
use Nietzscheson\Admovil\Voucher\UUIDInterface;
use Nietzscheson\Admovil\Voucher\VoucherInterface;

interface CFDIPaymentDetailInterface extends
  CurrencyInterface,
  ExchangeRateInterface,
  PaymentIdInterface,
  VoucherInterface,
  UUIDInterface
{

    /**
     * @return null|string
     */
    public function getSerie(): ?string;

    /**
     * @param string|null
     */
    public function setSerie(string $serie = null): void;

    /**
     * @return null|string
     */
    public function getFolio(): ?string;

    /**
     * @param string|null $folio
     */
    public function setFolio(string $folio = null): void;

    /**
     * @return null|string
     */
    public function getPartialityNumber(): ?string;

    /**
     * @param string|null
     */
    public function setPartialityNumber(string $partialityNumber = null): void;

    /**
     * @return null|float
     */
    public function getPreviousBalanceAmount(): ?float ;

    /**
     * @param float|null $previousBalanceAmount
     */
    public function setPreviousBalanceAmount(float $previousBalanceAmount = null): void;

    /**
     * @return float|null
     */
    public function getAmountPaid(): ?float;

    /**
     * @param float|null $amountPaid
     */
    public function setAmountPaid(float $amountPaid = null): void;
}