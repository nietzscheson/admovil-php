<?php

/*
 * (c) Cristian Angulo Nova < @nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\AdmovilInterface;

interface CFDICheckInInterface extends AdmovilInterface
{
    /**
     * @param CFDIResultInterface $voucher
     *
     * @return CFDICheckinResultInterface|CFDICheckinException
     */
    public function execute(CFDIResultInterface $voucher): ?CFDICheckinResultInterface;
}