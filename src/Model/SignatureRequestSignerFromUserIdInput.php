<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Model;

class SignatureRequestSignerFromUserIdInput
{
    /**
     * Create signer from an existing user.
     *
     * @var string
     */
    protected $userId;
    /**
     * @var mixed[]
     */
    protected $fields;
    /**
     * @var string
     */
    protected $signatureLevel = 'electronic_signature';
    /**
     * @var string|null
     */
    protected $signatureAuthenticationMode = 'no_otp';
    /**
     * @var SignatureRequestSignerFromUserIdInputRedirectUrls
     */
    protected $redirectUrls;

    /**
     * Create signer from an existing user.
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * Create signer from an existing user.
     */
    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @param mixed[] $fields
     */
    public function setFields(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function getSignatureLevel(): string
    {
        return $this->signatureLevel;
    }

    public function setSignatureLevel(string $signatureLevel): self
    {
        $this->signatureLevel = $signatureLevel;

        return $this;
    }

    public function getSignatureAuthenticationMode(): ?string
    {
        return $this->signatureAuthenticationMode;
    }

    public function setSignatureAuthenticationMode(?string $signatureAuthenticationMode): self
    {
        $this->signatureAuthenticationMode = $signatureAuthenticationMode;

        return $this;
    }

    public function getRedirectUrls(): SignatureRequestSignerFromUserIdInputRedirectUrls
    {
        return $this->redirectUrls;
    }

    public function setRedirectUrls(SignatureRequestSignerFromUserIdInputRedirectUrls $redirectUrls): self
    {
        $this->redirectUrls = $redirectUrls;

        return $this;
    }
}
