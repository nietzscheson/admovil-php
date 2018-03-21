<?php

/**
 * @package Nietzscheson\Admovil\Voucher
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Voucher;

interface UUIDInterface
{

    /**
     * @return string
     */
    public function getUUID(): string;

    /**
     * @param string
     */
    public function setUUID(string $uuid): void;
}