<?php

/*
 * (c) Cristian Angulo Nova < @nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\Admovil;
use Nietzscheson\Admovil\Item\ItemsInterface;

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
                "cantidad" => $item->getQuantity(),
                "descripcion" => $item->getDescription(),
                "NoIdentificacion" => $item->getIdentificationNumber(),
                "claveUnidad" => $item->getUnit()->getKey(),
                "Unidad" => $item->getUnit()->getName(),
                "ValorUnitario" => $item->getUnit()->getValue(),
                "descuento" => $item->getDiscount(),
                "baseImpuesto" => ($item->getUnit()->getValue() * $item->getQuantity()) - $item->getDiscount(),
                "transladodoIVA" => $item->getTaxes()->getVatTransfer(),
                "trasladodoIEPS" => $item->getTaxes()->getIEPSTransfer(),
                "retenidoIVA" => $item->getTaxes()->getVATWithheld(),
                "retenidoIEPS" => $item->getTaxes()->getIEPSWithheld(),
                "retenidoISR" => $item->getTaxes()->getIsr(),
                "NumeroPedimento" => $item->getPedimentNumber(),
                "CuentaPredial" => $item->getPredialAccount(),
                "Notas" => $item->getNotes(),
            ];

            $this->client->set_cfdi33_detalle($set_cfdi33_detalle);
        }
    }
}