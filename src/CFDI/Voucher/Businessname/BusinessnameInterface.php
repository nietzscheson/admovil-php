<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\CFDI\Voucher\Businessname;

interface BusinessnameInterface extends AddressAwareInterface
{

    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string
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
     * @return int|null
     */
    public function getTaxId(): ?int;

    /**
     * @param int|null
     */
    public function setTaxId(int $taxId = null): void;

    /**
     * @return string
     */
    public function getReference(): string;

    /**
     * @param string
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