<?php

/**
 * @package Nietzscheson\Admovil\Model\CFDI\Businessname
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDI\Businessname;

class Businessname implements BusinessnameInterface
{

    use AddressAwareTrait;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $rfc;

    /**
     * @var int
     */
    private $taxId;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $email;

    /**
     * {@inheritdoc}
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getRFC(): string
    {
        return $this->rfc;
    }

    /**
     * {@inheritdoc}
     */
    public function setRFC(string $rfc): void
    {
        $this->rfc = $rfc;
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxId(): ?int
    {
        return $this->taxId;
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxId(int $taxId = null): void
    {
        $this->taxId = $taxId;
    }

    /**
     * {@inheritdoc}
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * {@inheritdoc}
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}