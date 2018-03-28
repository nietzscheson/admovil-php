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

use Nietzscheson\Admovil\Collection\ItemInterface;
use Nietzscheson\Admovil\Voucher\UUIDInterface;

interface CFDIRelatedInterface extends UUIDInterface, ItemInterface
{

    /**
     * @return string|null
     */
    public function getRelationType(): ?string;

    /**
     * @param string
     */
    public function setRelationType(string $relationType): void;

}