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

use DateTime;
use Nietzscheson\Admovil\Currency\CurrencyInterface;
use Nietzscheson\Admovil\Currency\ExchangeRateInterface;
use Nietzscheson\Admovil\Voucher\VoucherInterface;

interface CFDIPaymentInterface extends CurrencyInterface, ExchangeRateInterface, VoucherInterface
{
    /**
     * @return DateTime
     */
    public function getDate(): DateTime;

    /**
     * @param DateTime $date
     */
    public function setDate(Datetime $date): void;

    /**
     * @return string
     */
    public function getOperationNumber(): string;

    /**
     * @param string
     */
    public function setOperationNumber(string $operationNumber): void;
}