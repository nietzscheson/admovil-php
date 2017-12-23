<?php

/**
 * @package Nietzscheson\Admovil\Fixture\Factory
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nietzscheson\Admovil\Fixture\Factory;

use Nietzscheson\Admovil\Admovil;
use Nietzscheson\Admovil\CFDI\CFDI;
use Nietzscheson\Admovil\CFDI\CFDICheckIn;
use Nietzscheson\Admovil\CFDI\CFDICheckInInterface;
use Nietzscheson\Admovil\CFDI\CFDIInterface;
use Nietzscheson\Admovil\Voucher\VoucherResult;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFDICheckInFactory extends AdmovilFactory
{

    /**
     * {@inheritdoc}
     */
    public static function create(array $options = []): CFDICheckInInterface
    {
        $cfdiCheckiIn = new CFDICheckIn();

        $optionsResolver = new OptionsResolver();
        self::configureOptions($optionsResolver);

        $options = $optionsResolver->resolve($options);

        $cfdiCheckiIn->setUser($options['user']);
        $cfdiCheckiIn->setPassword($options['password']);
        $cfdiCheckiIn->setRfc($options['rfc']);
        $cfdiCheckiIn->setSystemId($options['system_id']);

        $voucherResult = new VoucherResult();

        $voucherResult->setVoucher($options['voucher']);

        $cfdiCheckiIn->execute($voucherResult);

        return $cfdiCheckiIn;
    }

    protected static function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
          ->setDefault('voucher', '')
        ;

        parent::configureOptions($resolver);
    }

}