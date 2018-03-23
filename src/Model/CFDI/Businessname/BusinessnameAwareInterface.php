<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDI\Businessname;

interface BusinessnameAwareInterface
{
    /**
     * @return BusinessnameInterface
     */
    public function getBusinessName(): BusinessnameInterface;

    /**
     * @param BusinessnameInterface
     */
    public function setBusinessName(BusinessnameInterface $businessName);
}