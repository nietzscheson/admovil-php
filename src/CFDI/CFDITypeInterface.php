<?php

namespace Nietzscheson\Admovil\CFDI;

interface CFDITypeInterface
{
    const INGRESS = 'I';
    const EGRESS = 'E';
    const TRANSFER = 'T';
    const PAYROLL = 'N';
    const PAY = 'P';
}