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
use Nietzscheson\Admovil\Collection\ItemsInterface;
use Nietzscheson\Admovil\Exception\CFDIDetailException;
use Nietzscheson\Admovil\Voucher\VoucherInterface;

class CFDIRelated extends Admovil implements CFDIRelatedInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(ItemsInterface $items, VoucherInterface $voucher): void
    {
        foreach($items->getItems() as $item){

            $set_cfdi33_relacionados = [
                "IdComprobante" => $voucher->getVoucher(),
                "tipoRelacion" => $item->getRelationType(),
                "uuid" => $item->getUuid(),
            ];

            try{
                $this->client->set_cfdi33_relacionados($set_cfdi33_relacionados);
            }catch (Exception $e){
                throw new CFDIDetailException($e->getMessage(), $e->getCode());
            }
        }
    }
}