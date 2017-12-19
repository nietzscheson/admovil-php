<?php

namespace Nietzscheson\Admovil;

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
     * @return int
     */
    public function getTaxId(): int
    {
        return $this->taxId;
    }

    /**
     * @param int $taxId
     */
    public function setTaxId(int $taxId): void
    {
        $this->taxId = $taxId;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}