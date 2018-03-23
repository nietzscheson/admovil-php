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
use Nietzscheson\Admovil\Model\CFDIInterface as CFDIIModelnterface;
use Nietzscheson\Admovil\Exception\CFDIException;

class CFDI extends Admovil implements CFDIInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(CFDIIModelnterface $cfdiModel): ?CFDIResultInterface
    {

        $payment = $cfdiModel->getPayment();
        $business = $cfdiModel->getBusinessName();
        $adddress = $business->getAddress();

        $set_cfdi33 = [
            "user" => $cfdiModel->getUser(),
            "password" => $cfdiModel->getPassword(),
            "Tipo" => $cfdiModel->getBillingType(),
            "folio_referencia" => $cfdiModel->getSystemId(),
            "tipoDeComprobante" => $cfdiModel->getVoucherType(),
            "IdSucursal" => $cfdiModel->getBranchOffice(),
            "emisorRFC" => $cfdiModel->getRFC(),
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
            "receptorNumRegIdTrib" => TaxIdResolver::resolver($cfdiModel),
            "receptorReferencia" => $business->getReference(),
            "receptorCorreo" => $business->getEmail(),
            "Notas" => $cfdiModel->getNotes(),
            "Moneda" => $cfdiModel->getCurrency(),
            "TipoCambio" => $cfdiModel->getExchangeRate(),
            "usoCFDI" => $cfdiModel->getCFDIUse(),
            "confirmacion" => $cfdiModel->getConfirmation(),
        ];

        try{

            $cfdiResult = new CFDIResult();

            $cfdiResult->setVoucher((int) $this->client->set_cfdi33($set_cfdi33)->set_cfdi33Result);

            return $cfdiResult;

        }catch(Exception $e){
            throw new CFDIException($e->getMessage(), $e->getCode());
        }
    }
}