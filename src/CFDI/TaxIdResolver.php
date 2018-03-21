<?php

/**
 * @package Nietzscheson\Admovil\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nietzscheson\Admovil\CFDI;

class TaxIdResolver implements TaxIdResolverInterface
{

    /**
     * @param CFDIDataInterface $voucher
     *
     * @return null|string
     */
    public static function resolver(CFDIDataInterface $voucher): ?string
    {

        $business = $voucher->getBusinessName();

        if($business->getRFC() === self::GENERIC_RFC){
            return null;
        }

        return $business->getRFC();
    }
}