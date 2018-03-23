<?php

/**
 * @package Nietzscheson\Admovil\Model\CFDI
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDI;

class Credential implements CredentialInterface
{
    /**
     * @var string
     */
    protected $user;

    /**
     * @var string
     */
    protected $password;

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
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

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