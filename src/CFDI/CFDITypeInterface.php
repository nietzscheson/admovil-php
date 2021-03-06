<?php

/**
 * @package Nietzscheson\Admovil\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\CFDI;

interface CFDITypeInterface
{
    const INGRESS = 'I';
    const EGRESS = 'E';
    const TRANSFER = 'T';
    const PAYROLL = 'N';
    const PAY = 'P';
}