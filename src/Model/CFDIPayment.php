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

use Datetime;
use Nietzscheson\Admovil\Currency\CurrencyTrait;
use Nietzscheson\Admovil\Currency\ExchangeRateTrait;
use Nietzscheson\Admovil\Voucher\VoucherTrait;

class CFDIPayment implements CFDIPaymentInterface
{
    use CurrencyTrait;
    use ExchangeRateTrait;
    use VoucherTrait;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $operationNumber;

    /**
     * {@inheritdoc}
     */
    public function getDate(): Datetime
    {
        return $this->date;
    }

    /**
     * {@inheritdoc}
     */
    public function setDate(Datetime $date): void
    {
        $this->date = $date;
    }

    /**
     * {@inheritdoc}
     */
    public function getOperationNumber(): ?string
    {
        return $this->operationNumber;
    }

    /**
     * {@inheritdoc}
     */
    public function setOperationNumber(string $operationNumber = null): void
    {
        $this->operationNumber = $operationNumber;
    }

}