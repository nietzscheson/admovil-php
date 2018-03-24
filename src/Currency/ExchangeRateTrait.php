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
     * @var string
     */
    private $exchangeRate;

    /**
     * {@inheritdoc}
     */
    public function getExchangeRate(): string
    {
        return $this->exchangeRate;
    }

    /**
     * {@inheritdoc}
     */
    public function setExchangeRate(string $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }
}