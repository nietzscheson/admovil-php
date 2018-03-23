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

use Nietzscheson\Admovil\Model\CFDIInterface;

class TaxIdResolver implements TaxIdResolverInterface
{

    /**
     * @param CFDIInterface $cfdi
     *
     * @return null|string
     */
    public static function resolver(CFDIInterface $cfdi): ?string
    {

        $business = $cfdi->getBusinessName();

        if($business->getRFC() === self::GENERIC_RFC){
            return null;
        }

        return $business->getRFC();
    }
}