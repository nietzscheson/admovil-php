<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

interface BusinessnameAwareInterface
{
    /**
     * @return BusinessnameInterface
     */
    public function getBusinessName(): BusinessnameInterface;

    /**
     * @param BusinessnameInterface $businessName
     */
    public function setBusinessName(BusinessnameInterface $businessName);
}