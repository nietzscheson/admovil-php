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

use Exception;
use Nietzscheson\Admovil\Admovil;
use Nietzscheson\Admovil\Model\CFDI\CredentialInterface;
use Nietzscheson\Admovil\Exception\CFDICheckinException;

class CFDICheckIn extends Admovil implements CFDICheckInInterface
{

    /**
     * {@inheritdoc}
     */
    public function execute(CFDIResultInterface $voucher, CredentialInterface $credential): ?CFDICheckinResultInterface
    {

        try{

            $cfdiCheckinResult = new CFDICheckinResult();

            $timbrar = $this->client->timbrar(['user' => $credential->getUser(), 'password' => $credential->getPassword(), 'IdComprobante' => $voucher->getVoucher()]);

            $cfdiCheckinResult->setVoucher($voucher->getVoucher());
            $cfdiCheckinResult->setUuid($timbrar->timbrarResult->UUID);

            return $cfdiCheckinResult;

        }catch(Exception $e){
            throw new CFDICheckinException($e->getMessage(), $e->getCode());
        }
    }
}