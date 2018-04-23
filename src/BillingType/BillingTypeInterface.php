<?php

/**
 * @package Nietzscheson\Admovil\BillingType
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\BillingType;

interface BillingTypeInterface
{
    const BILL = 'FA';
    const CHARGE_NOTE = 'NC';
    const CREDIT_NOTE = 'NA';
    const PAYROLL_RECEIPT = 'NOM';
}