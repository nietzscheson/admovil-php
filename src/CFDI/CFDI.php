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

use Exception;
use Nietzscheson\Admovil\Admovil;
use Nietzscheson\Admovil\Voucher\VoucherException;
use Nietzscheson\Admovil\Voucher\VoucherInterface;
use Nietzscheson\Admovil\Voucher\VoucherResult;
use Nietzscheson\Admovil\Voucher\VoucherResultInterface;

class CFDI extends Admovil implements CFDIInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(VoucherInterface $voucher): ?VoucherResultInterface
    {

        $payment = $voucher->getPayment();
        $business = $voucher->getBusinessName();
        $adddress = $business->getAddress();

        $voucher = [
            "user" => $this->getUser(),
            "password" => $this->getPassword(),
            "Tipo" => $voucher->getBillingType(),
            "folio_referencia" => $this->getSystemId(),
            "tipoDeComprobante" => $voucher->getVoucherType(),
            "IdSucursal" => $voucher->getBranchOffice(),
            "emisorRFC" => $this->getRFC(),
            "condicionesPago" => $payment->getCondition(),
            "FormaPago" => $payment->getForm(),
            "numCtaPago" => $payment->getAccount(),
            "metodoPago" => $payment->getMethod(),
            "receptorID" => $business->getId(),
            "receptorNombre" => $business->getName(),
            "receptorRFC" => $business->getRFC(),
            "receptorCalle" => $adddress->getStreet(),
            "receptorCodigoPostal" => $adddress->getCodePostal(),
            "receptorColonia" => $adddress->getNeighborhood(),
            "receptorEstado" => $adddress->getState(),
            "receptorLocalidad" => $adddress->getCity(),
            "receptorMunicipio" => $adddress->getTown(),
            "receptorNoExterior" => $adddress->getExteriorNumber(),
            "receptorNoIntterior" => $adddress->getInteriorNumber(),
            "receptorTel" => $adddress->getTelephone(),
            "receptorResidenciaFiscal" => $adddress->getFiscalResidency(),
            "receptorNumRegIdTrib" => $business->getTaxId(),
            "receptorReferencia" => $business->getReference(),
            "receptorCorreo" => $business->getEmail(),
            "Notas" => $voucher->getNotes(),
            "Moneda" => $voucher->getCurrency(),
            "TipoCambio" => $voucher->getExchangeRate(),
            "usoCFDI" => $voucher->getCFDIUse(),
            "confirmacion" => $voucher->getConfirmation(),
        ];

        try{

            $voucherResult = new VoucherResult();

            $voucherResult->setVoucher($this->client->set_cfdi33($voucher)->set_cfdi33Result);

            return $voucherResult;

        }catch(Exception $e){
            throw new VoucherException($e->getMessage(), $e->getCode());
        }

    }
}