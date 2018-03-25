<?php

/**
 * @package Nietzscheson\Admovil\Payment
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Payment;

interface PaymentIdInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @param int
     */
    public function setId(int $id): void;

}