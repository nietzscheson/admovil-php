<?php

namespace Nietzscheson\Admovil;

interface AdmovilInterface extends CredentialInterface
{

//    const ADMOVIL_WDSL = 'http://www.admovil.net/adconnection/webservice_soap.asmx?WSDL';
    const ADMOVIL_WDSL = 'https://admovil.net/adconnection/ws_timbrado.asmx?WSDL';

//    /**
//     * @param VoucherInterface
//     *
//     * @return VoucherResultInterface|VoucherException
//     */
//    public function cfdi33(VoucherInterface $voucher): ?VoucherResultInterface;
//
//    /**
//     * @param ItemsInterface
//     * @param VoucherResultInterface
//     */
//    public function cfdi33Detail(ItemsInterface $items, VoucherResultInterface $voucherResult): void;
//
//    /**
//     * @param VoucherResultInterface
//     */
//    public function checkIn(VoucherResultInterface $voucherResult): void;

}