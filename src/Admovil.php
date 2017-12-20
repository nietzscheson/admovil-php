<?php

namespace Nietzscheson\Admovil;

use Exception;

class Admovil extends Connect implements AdmovilInterface
{

    /**
     * {@inheritdoc}
     */
    public function voucher(VoucherInterface $voucher): VoucherResultInterface
    {

        $payment = $voucher->getPayment();
        $business = $voucher->getBusinessName();
        $adddress = $business->getAddress();

        $voucher = [
            "user" => $this->credential->getUser(),
            "password" => $this->credential->getPassword(),
            "Tipo" => $voucher->getBillingType(),
            "folio_referencia" => $this->credential->getSystemId(),
            "tipoDeComprobante" => $voucher->getVoucherType(),
            "IdSucursal" => $voucher->getBranchOffice(),
            "emisorRFC" => $this->credential->getRFC(),
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

    /**
     * {@inheritdoc}
     */
    public function detail(ItemsInterface $items): void
    {

        foreach($items->getItems() as $item){

            $this->client->set_cfdi33_detalle([
                "idComprobante" => $item->getVoucher(),
                "ClaveProdServ" => $item->getProductOrServiceKey(),
                "NoPartida" => $item->getCertificateNumber(),
                "cantidad" => $item->getQuantity(),
                "descripcion" => $item->getDescription(),
                "NoIdentificacion" => $item->getIdentificationNumber(),
                "claveUnidad" => $item->getUnit()->getKey(),
                "unidad" => $item->getUnit()->getUnit(),
                "ValorUnitario" => $item->getUnit()->getValue(),
                "descuento" => $item->getDiscount(),
                "baseImpuesto" => $item->getTaxes()->getTaxBase(),
                "transladodoIVA" => $item->getTaxes()->getVatTransfer(),
                "trasladodoIEPS" => $item->getTaxes()->getIEPSTransfer(),
                "retenidoIVA" => $item->getTaxes()->getVATWithheld(),
                "retenidoIEPS" => $item->getTaxes()->getIEPSWithheld(),
                "retenidoISR" => $item->getTaxes()->getISRWithheld(),
                "NumeroPedimento" => $item->getPedimentNumber(),
                "CuentaPredial" => $item->getPredialAccount(),
                "Notas" => $item->getNotes(),
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stamped(StampedInterface $stamped): void
    {
        $this->client->timbrar([
            "user" => $stamped->getUser(),
            "password" => $stamped->getPassword(),
            "IdComprobante" => $stamped->getVoucher()
        ]);
    }
}
