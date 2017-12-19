<?php

namespace Nietzscheson\Admovil;

class Credential implements CredentialInterface
{

    use UserTrait;

    /**
     * @var string
     */
    private $rfc;

    /**
     * @var string
     */
    private $systemId;

    /**
     * @var string
     */
    private $businessId;

    /**
     * @return string
     */
    public function getRfc(): string
    {
        return $this->rfc;
    }

    /**
     * @param string $rfc
     */
    public function setRfc(string $rfc): void
    {
        $this->rfc = $rfc;
    }

    /**
     * @return string
     */
    public function getSystemId(): string
    {
        return $this->systemId;
    }

    public function setSystemId(string $id): void
    {
        $this->systemId = $id;
    }

    /**
     * @return string
     */
    public function getBusinessId(): string
    {
        return $this->businessId;
    }

    /**
     * @param string $businessId
     */
    public function setBusinessId(string $businessId): void
    {
        $this->businessId = $businessId;
    }
}