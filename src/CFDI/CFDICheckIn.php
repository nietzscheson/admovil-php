<?php

/*
 * (c) Cristian Angulo Nova < @nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\Admovil;
use Nietzscheson\Admovil\Voucher\VoucherResultInterface;

class CFDICheckIn extends Admovil implements CFDICheckInInterface
{

    /**
     * {@inheritdoc}
     */
    public function execute(VoucherResultInterface $voucher): void
    {

        $timbrar = [
            "user" => $this->getUser(),
            "password" => $this->getPassword(),
            "IdComprobante" => (int) $voucher->getVoucher()
        ];

        $this->client->timbrar($timbrar);
    }
}