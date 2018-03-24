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

use Nietzscheson\Admovil\Currency\CurrencyTrait;
use Nietzscheson\Admovil\Currency\ExchangeRateTrait;
use Nietzscheson\Admovil\Payment\PaymentIdTrait;
use Nietzscheson\Admovil\Voucher\UUIDTrait;
use Nietzscheson\Admovil\Voucher\VoucherTrait;

class CFDIPaymentDetail implements CFDIPaymentDetailInterface
{
    use CurrencyTrait;
    use ExchangeRateTrait;
    use PaymentIdTrait;
    use VoucherTrait;
    use UUIDTrait;

    /**
     * @var string
     */
    private $serie;

    /**
     * @var string
     */
    private $folio;

    /**
     * @var string
     */
    private $partialityNumber;

    /**
     * @var float
     */
    private $previousBalanceAmount;

    /**
     * @var float
     */
    private $amountPaid;

    /**
     * {@inheritdoc}
     */
    public function getSerie(): ?string
    {
        return $this->serie;
    }

    /**
     * {@inheritdoc}
     */
    public function setSerie(string $serie = null): void
    {
        $this->serie = $serie;
    }

    /**
     * {@inheritdoc}
     */
    public function getFolio(): ?string
    {
        return $this->folio;
    }

    /**
     * {@inheritdoc}
     */
    public function setFolio(string $folio = null): void
    {
        $this->folio = $folio;
    }

    /**
     * {@inheritdoc}
     */
    public function getPartialityNumber(): ?string
    {
        return $this->partialityNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setPartialityNumber(string $partialityNumber = null): void
    {
        $this->partialityNumber = $partialityNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function getPreviousBalanceAmount(): ?float
    {
        return $this->previousBalanceAmount;
    }

    /**
     * {@inheritdoc}
     */
    public function setPreviousBalanceAmount(float $previousBalanceAmount = null): void
    {
        $this->previousBalanceAmount = $previousBalanceAmount;
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountPaid(): ?float
    {
        return $this->amountPaid;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountPaid(float $amountPaid = null): void
    {
        $this->amountPaid = $amountPaid;
    }
}