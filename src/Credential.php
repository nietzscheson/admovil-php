<?php

namespace Nietzscheson\Admovil;

class Credential implements CredentialInterface
{

    use UserTrait;

    /**
     * @var string
     */
    protected $rfc;

    /**
     * @var string
     */
    protected $systemId;

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
}