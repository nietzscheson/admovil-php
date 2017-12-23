<?php

namespace Nietzscheson\Admovil\CFDI;

use RuntimeException;

class CFDIException extends RuntimeException
{
    public function getMessageCustomer()
    {
        return "Se ha presentado un error al facturar. Por favor verifique sus datos e inténtelo nuevamente.";
    }
}