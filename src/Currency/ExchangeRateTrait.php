<?php

/**
 * @package Nietzscheson\Admovil\Currency
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Currency;

trait ExchangeRateTrait
{
    /**
     * @var float
     */
    private $exchangeRate;

    /**
     * {@inheritdoc}
     */
    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

    /**
     * {@inheritdoc}
     */
    public function setExchangeRate(float $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }
}