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

class CFDICancel extends Admovil implements CFDICancelInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(CredentialInterface $credential, VoucherInterface $voucher): void
    {
        try{

            $this->client->Cancela_Comprobante(["usuario" => $credential->getUser(), "contraseña" => $credential->getPassword(), "IdComprobante" => $voucher->getVoucher()]);

        }catch(Exception $e){
            throw new CFDIUUIDException($e->getMessage(), $e->getCode());
        }
    }
}