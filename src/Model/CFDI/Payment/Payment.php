<?php

declare(strict_types=1);

namespace Nietzscheson\Admovil\Model\CFDI\Payment;

class Payment implements PaymentInterface
{

    /**
     * @var string
     */
    private $condition;

    /**
     * @var string
     */
    private $form;

    /**
     * @var string
     */
    private $account;

    /**
     * @var string
     */
    private $method;

    /**
     * {@inheritdoc}
     */
    public function getCondition(): string
    {
        return $this->condition;
    }

    /**
     * {@inheritdoc}
     */
    public function setCondition(string $condition): void
    {
        $this->condition = $condition;
    }

    /**
     * {@inheritdoc}
     */
    public function getForm(): string
    {
        return $this->form;
    }

    /**
     * {@inheritdoc}
     */
    public function setForm(string $form): void
    {
        $this->form = $form;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccount(string $account): void
    {
        $this->account = $account;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * {@inheritdoc}
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }
}