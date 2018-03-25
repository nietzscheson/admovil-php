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
use Nietzscheson\Admovil\Exception\CFDIPaymentDetailException;
use Nietzscheson\Admovil\Model\CFDIPaymentDetailInterface as CFDIPaymentDetailModelnterface;

class CFDIPaymentDetail extends Admovil implements CFDIPaymentDetailtInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(CFDIPaymentDetailModelnterface $cfdiPaymentDetailModel): void
    {
        $set_pagos10_detalle = [
            "IdComprobante" => $cfdiPaymentDetailModel->getVoucher(),
            "idPago" => $cfdiPaymentDetailModel->getId(),
            "uuid" => $cfdiPaymentDetailModel->getUUID(),
            "serie" => $cfdiPaymentDetailModel->getSerie(),
            "folio" => $cfdiPaymentDetailModel->getFolio(),
            "moneda" => $cfdiPaymentDetailModel->getCurrency(),
            "tipoCambio" => $cfdiPaymentDetailModel->getExchangeRate(),
            "numParcialidad" => $cfdiPaymentDetailModel->getPartialityNumber(),
            "impSaldoAnt" => $cfdiPaymentDetailModel->getPreviousBalanceAmount(),
            "impPagado" => $cfdiPaymentDetailModel->getAmountPaid(),
        ];

        try{

            $this->client->set_pagos10_detalle($set_pagos10_detalle);

        }catch(Exception $e){
            throw new CFDIPaymentDetailException($e->getMessage(), $e->getCode());
        }
    }
}