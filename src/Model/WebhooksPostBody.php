<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Model;

class WebhooksPostBody
{
    /**
     * Https target URL of the webhook.
     *
     * @var string
     */
    protected $endpoint;
    /**
     * Short description of the webhook.
     *
     * @var string|null
     */
    protected $description;
    /**
     * @var bool
     */
    protected $sandbox;
    /**
     * @var mixed
     */
    protected $subscribedEvents;
    /**
     * Autogenerated 32 bytes key.
     *
     * @var string|null
     */
    protected $secretKey;
    /**
     * @var mixed
     */
    protected $scopes;
    /**
     * If a Webhook request fails for any reason, Yousign will retry the request 8 times using a back-off mechanism after: 2, 6, 30, 60, 300, 1080, 1440, 2880 min.
     *
     * @var bool
     */
    protected $autoRetry;
    /**
     * Is the webhook enabled ?
     *
     * @var bool
     */
    protected $enabled;

    /**
     * Https target URL of the webhook.
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * Https target URL of the webhook.
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * Short description of the webhook.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Short description of the webhook.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSandbox(): bool
    {
        return $this->sandbox;
    }

    public function setSandbox(bool $sandbox): self
    {
        $this->sandbox = $sandbox;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscribedEvents()
    {
        return $this->subscribedEvents;
    }

    /**
     * @param mixed $subscribedEvents
     */
    public function setSubscribedEvents($subscribedEvents): self
    {
        $this->subscribedEvents = $subscribedEvents;

        return $this;
    }

    /**
     * Autogenerated 32 bytes key.
     */
    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    /**
     * Autogenerated 32 bytes key.
     */
    public function setSecretKey(?string $secretKey): self
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @param mixed $scopes
     */
    public function setScopes($scopes): self
    {
        $this->scopes = $scopes;

        return $this;
    }

    /**
     * If a Webhook request fails for any reason, Yousign will retry the request 8 times using a back-off mechanism after: 2, 6, 30, 60, 300, 1080, 1440, 2880 min.
     */
    public function getAutoRetry(): bool
    {
        return $this->autoRetry;
    }

    /**
     * If a Webhook request fails for any reason, Yousign will retry the request 8 times using a back-off mechanism after: 2, 6, 30, 60, 300, 1080, 1440, 2880 min.
     */
    public function setAutoRetry(bool $autoRetry): self
    {
        $this->autoRetry = $autoRetry;

        return $this;
    }

    /**
     * Is the webhook enabled ?
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Is the webhook enabled ?
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
