<?php

/*
 * (c) Cristian Angulo Nova < @nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\Admovil;
use Nietzscheson\Admovil\CFDI\Item\ItemsInterface;

class CFDIDetail extends Admovil implements CFDIDetailInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(ItemsInterface $items, CFDIResultInterface $voucher): void
    {
        foreach($items->getItems() as $item){

            $set_cfdi33_detalle = [
                "IdComprobante" => (int) $voucher->getVoucher(),
                "ClaveProdServ" => $item->getProductOrServiceKey(),
                "NoPartida" => $item->getCertificateNumber(),
                "cantidad" => $quantity = $item->getQuantity(),
                "descripcion" => $item->getDescription(),
                "NoIdentificacion" => $item->getIdentificationNumber(),
                "claveUnidad" => $item->getUnitKey(),
                "Unidad" => $item->getUnitName(),
                "ValorUnitario" => $unitValue = $item->getUnitValue(),
                "descuento" => $discount = $item->getDiscount(),
                "baseImpuesto" => ($unitValue * $quantity) - $discount,
                "transladodoIVA" => $item->getVatTransfer(),
                "trasladodoIEPS" => $item->getIEPSTransfer(),
                "retenidoIVA" => $item->getVATWithheld(),
                "retenidoIEPS" => $item->getIEPSWithheld(),
                "retenidoISR" => $item->getIsr(),
                "NumeroPedimento" => $item->getPedimentNumber(),
                "CuentaPredial" => $item->getPredialAccount(),
                "Notas" => $item->getNotes(),
            ];
            try{
                $this->client->set_cfdi33_detalle($set_cfdi33_detalle);
            }catch (\Exception $e){
                echo '<pre>';print_r($e->getMessage());exit();
            }

        }
    }
}