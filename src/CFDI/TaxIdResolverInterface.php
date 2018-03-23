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

use Nietzscheson\Admovil\Model\CFDIInterface;

interface TaxIdResolverInterface
{

    const GENERIC_RFC = 'XEXX010101000';

    public static function resolver(CFDIInterface $voucher);

}