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
use Nietzscheson\Admovil\CFDI\Voucher\VoucherInterface;

class CFDI extends Admovil implements CFDIInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(VoucherInterface $voucher): ?CFDIResultInterface
    {

        $payment = $voucher->getPayment();
        $business = $voucher->getBusinessName();
        $adddress = $business->getAddress();

        $set_cfdi33 = [
            "user" => $voucher->getUser(),
            "password" => $voucher->getPassword(),
            "Tipo" => $voucher->getBillingType(),
            "folio_referencia" => $voucher->getSystemId(),
            "tipoDeComprobante" => $voucher->getVoucherType(),
            "IdSucursal" => $voucher->getBranchOffice(),
            "emisorRFC" => $voucher->getRFC(),
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
            "receptorNumRegIdTrib" => TaxIdResolver::resolver($voucher),
            "receptorReferencia" => $business->getReference(),
            "receptorCorreo" => $business->getEmail(),
            "Notas" => $voucher->getNotes(),
            "Moneda" => $voucher->getCurrency(),
            "TipoCambio" => $voucher->getExchangeRate(),
            "usoCFDI" => $voucher->getCFDIUse(),
            "confirmacion" => $voucher->getConfirmation(),
        ];

        try{

            $voucherResult = new CFDIResult();

            $voucherResult->setVoucher($this->client->set_cfdi33($set_cfdi33)->set_cfdi33Result);

            return $voucherResult;

        }catch(Exception $e){
            throw new CFDIException($e->getMessage(), $e->getCode());
        }
    }
}