<?php

/*
 * (c) Cristian Angulo Nova < @nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

use Exception;
use Nietzscheson\Admovil\Admovil;

class CFDICheckIn extends Admovil implements CFDICheckInInterface
{

    /**
     * {@inheritdoc}
     */
    public function execute(CFDIResultInterface $voucher): ?CFDICheckinResultInterface
    {

        $timbrar = [
            "user" => $this->getUser(),
            "password" => $this->getPassword(),
//            "IdComprobante" => (int) $voucher->getVoucher()
            "IdComprobante" => (int) $voucher->getVoucher()
        ];

        try{

            $cfdiCheckinResult = new CFDICheckinResult();

            $timbrar = $this->client->timbrar($timbrar);

            $cfdiCheckinResult->setVoucher($timbrar->timbrarResult->IdComprobante);
            $cfdiCheckinResult->setUuid($timbrar->timbrarResult->UUID);

            return $cfdiCheckinResult;

        }catch(Exception $e){
            throw new CFDICheckinException($e->getMessage(), $e->getCode());
        }
    }
}