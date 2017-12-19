<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil;

interface BusinessnameInterface extends AddressAwareInterface
{

    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     */
    public function setId(string $id): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string
     */
    public function setName(string $name): void;

    /**
     * @return string
     */
    public function getRFC(): string;

    /**
     * @param string
     */
    public function setRFC(string $rfc): void;

    /**
     * @return int
     */
    public function getTaxId(): int;

    /**
     * @param int $taxId
     */
    public function setTaxId(int $taxId): void;

    /**
     * @return string
     */
    public function getReference(): string;

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @param string
     */
    public function setEmail(string $email): void;
}