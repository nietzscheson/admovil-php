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

use Nietzscheson\Admovil\Voucher\UUIDTrait;
use Nietzscheson\Admovil\Voucher\VoucherTrait;

class CFDICheckinResult implements CFDICheckinResultInterface
{
    use VoucherTrait;
    use UUIDTrait;
}