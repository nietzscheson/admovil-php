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
use Nietzscheson\Admovil\DateTime\DateTimeInterface;
use Nietzscheson\Admovil\Exception\CFDIPaymentException;
use Nietzscheson\Admovil\Model\CFDIPaymentInterface as CFDIPaymentModelnterface;

class CFDIPayment extends Admovil implements CFDIPaymentInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(CFDIPaymentModelnterface $cfdiPaymentModel): ?CFDIPaymentResultInterface
    {
        $set_pagos = [
            "IdComprobante" => $cfdiPaymentModel->getVoucher(),
            "fechaPago" => $cfdiPaymentModel->getDate()->format(DateTimeInterface::ADMOVIL),
            "formaPago" => $cfdiPaymentModel->getForm(),
            "moneda" => $cfdiPaymentModel->getCurrency(),
            "tipoCambio" => $cfdiPaymentModel->getExchangeRate(),
            "numOperacion" => $cfdiPaymentModel->getOperationNumber(),

        ];

        try{

            $cfdiPaymentResult = new CFDIPaymentResult();

            $cfdiPaymentResult->setId($this->client->set_pagos10($set_pagos)->set_pagos10Result);

            return $cfdiPaymentResult;

        }catch(Exception $e){
            throw new CFDIPaymentException($e->getMessage(), $e->getCode());
        }
    }
}