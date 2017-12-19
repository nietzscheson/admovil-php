<?php

namespace Nietzscheson\Admovil;

interface AdmovilInterface extends ConnectInterface
{

//    const ADMOVIL_WDSL = 'http://www.admovil.net/adconnection/webservice_soap.asmx?WSDL';
    const ADMOVIL_WDSL = 'https://admovil.net/adconnection/ws_timbrado.asmx?WSDL';

    /**
     * @param VoucherInterface
     *
     * @return VoucherResultInterface|VoucherException
     */
    public function voucher(VoucherInterface $voucher): ?VoucherResultInterface;

    /**
     * @param ItemsInterface
     */
    public function detail(ItemsInterface $items): void;

    /**
     * @param StampedInterface
     */
    public function stamped(StampedInterface $stamped): void;
}