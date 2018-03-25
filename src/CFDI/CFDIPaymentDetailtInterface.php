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
use Nietzscheson\Admovil\Exception\CFDIPaymentDetailException;
use Nietzscheson\Admovil\Model\CFDIPaymentDetailInterface as CFDIPaymentDetailtModelInterface;

interface CFDIPaymentDetailtInterface extends AdmovilInterface
{
    /**
     * @param CFDIPaymentDetailtModelInterface $cfdiPaymentDetailModel
     *
     * @return  void|CFDIPaymentDetailException
     */
    public function execute(CFDIPaymentDetailtModelInterface $cfdiPaymentDetailModel): void;
}