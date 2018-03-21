<?php

/*
 * (c) Cristian Angulo Nova < @nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code .
 */

namespace Nietzscheson\Admovil\CFDI;

use Nietzscheson\Admovil\AdmovilInterface;

interface CFDIInterface extends AdmovilInterface
{
    /**
     * @param CFDIDataInterface $voucher
     *
     * @return  CFDIResultInterface|CFDIException
     */
    public function execute(CFDIDataInterface $voucher): ?CFDIResultInterface;
}