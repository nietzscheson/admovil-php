<?php

namespace Nietzscheson\Admovil\Voucher;

use RuntimeException;

class VoucherException extends RuntimeException
{
    public function getMessageCustomer()
    {
        return "Se ha presentado un error al facturar. Por favor verifique sus datos e inténtelo nuevamente.";
    }
}