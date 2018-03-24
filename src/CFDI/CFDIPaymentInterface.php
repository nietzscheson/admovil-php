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
use Nietzscheson\Admovil\Exception\CFDIPaymentException;
use Nietzscheson\Admovil\Model\CFDIPaymentInterface as CFDIPaymentModelInterface;

interface CFDIPaymentInterface extends AdmovilInterface
{
    /**
     * @param CFDIPaymentModelInterface $cfdiPaymentModel
     *
     * @return  CFDIPaymentResultInterface|CFDIPaymentException
     */
    public function execute(CFDIPaymentModelInterface $cfdiPaymentModel): ?CFDIPaymentResultInterface;
}