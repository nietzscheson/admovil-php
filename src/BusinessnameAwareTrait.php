<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

trait BusinessnameAwareTrait
{

    private $businessname;

    /**
     * @return BusinessnameInterface
     */
    public function getBusinessName(): BusinessnameInterface
    {
        return $this->businessname;
    }

    /**
     * @param BusinessnameInterface
     */
    public function setBusinessName(BusinessnameInterface $businessname)
    {
        $this->businessname = $businessname;
    }
}