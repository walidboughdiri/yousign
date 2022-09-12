<?php

namespace IIYousign\Model;

class ConfigWebhookTemplate
{
    /**
     * Url to call
     *
     * @var string
     */
    protected $url;
    /**
     * Http request type
     *
     * @var string|null
     */
    protected $method = 'GET';
    /**
     * Http request headers
     *
     * @var mixed[]|null
     */
    protected $headers;
    /**
     * Url to call
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Url to call
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Http request type
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    /**
     * Http request type
     *
     * @param string|null $method
     *
     * @return self
     */
    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * Http request headers
     *
     * @return mixed[]|null
     */
    public function getHeaders(): ?iterable
    {
        return $this->headers;
    }
    /**
     * Http request headers
     *
     * @param mixed[]|null $headers
     *
     * @return self
     */
    public function setHeaders(?iterable $headers): self
    {
        $this->headers = $headers;
        return $this;
    }
}
