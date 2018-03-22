<?php

/**
 * @package Nietzscheson\Admovil\Related
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\CFDI\CFDIRelatedData;

interface RelatedTypeInterface
{

    const CREDIT_NOTE_OF_RELATED_DOCUMENTS = 01;
    const DEBIT_NOTE_OF_RELATED_DOCUMENTS = 02;
    const RETURN_OF_MERCHANDISE_ON_PREVIOUS_INVOICES_OR_TRANSFER = 03;
    const REPLACEMENT_OF_PREVIOUS_CFDIS = 04;
    const TRANSFERS_PREVIOUSLY_INVOICED = 05;
    const INVOICE_GENERATED_BY_PREVIOUS_TRANSFER = 06;
    const CFDI_BY_ADVANCE_PAYMENT = 07;

}