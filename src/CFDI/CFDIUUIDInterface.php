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

use Nietzscheson\Admovil\AdmovilInterface;
use Nietzscheson\Admovil\Model\CFDI\CredentialInterface;
use Nietzscheson\Admovil\Model\CFDIInterface as CFDIModelInterface;
use Nietzscheson\Admovil\Exception\CFDIException;
use Nietzscheson\Admovil\Voucher\VoucherInterface;

interface CFDIUUIDInterface extends AdmovilInterface
{
    /**
     * @param CredentialInterface $credential
     * @param VoucherInterface $voucher
     *
     * @return  CFDIUUIDResultInterface|CFDIException
     */
    public function execute(CredentialInterface $credential, VoucherInterface $voucher): ?CFDIUUIDResultInterface;
}