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
use Nietzscheson\Admovil\Exception\CFDIUUIDException;
use Nietzscheson\Admovil\Model\CFDI\CredentialInterface;
use Nietzscheson\Admovil\Voucher\VoucherInterface;

class CFDIUUID extends Admovil implements CFDIUUIDInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(CredentialInterface $credential, VoucherInterface $voucher): ?CFDIUUIDResultInterface
    {
        try{

            $get_uuid = [
               "user" => $credential->getUser(),
               "password" => $credential->getPassword(),
               "IdComprobante" => $voucher->getVoucher(),
            ];

            $uuidResult = new CFDIUUIDResult();

            $uuidResult->setUuid($this->client->get_uuid($get_uuid)->get_uuidResult);

            return $uuidResult;

        }catch(Exception $e){
            throw new CFDIUUIDException($e->getMessage(), $e->getCode());
        }
    }
}