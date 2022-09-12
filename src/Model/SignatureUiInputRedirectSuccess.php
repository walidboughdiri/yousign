<?php

namespace IIYousign\Model;

class SignatureUiInputRedirectSuccess
{
    /**
     * URL of redirect
     *
     * @var string
     */
    protected $url;
    /**
     * Target of the redirection
     *
     * @var string
     */
    protected $target;
    /**
     * Don't redirect the user directly, send to our detail of the procedure view. But invite the user to click on a button for use this redirection.
     *
     * @var bool
     */
    protected $auto = true;
    /**
     * URL of redirect
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * URL of redirect
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
     * Target of the redirection
     *
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }
    /**
     * Target of the redirection
     *
     * @param string $target
     *
     * @return self
     */
    public function setTarget(string $target): self
    {
        $this->target = $target;
        return $this;
    }
    /**
     * Don't redirect the user directly, send to our detail of the procedure view. But invite the user to click on a button for use this redirection.
     *
     * @return bool
     */
    public function getAuto(): bool
    {
        return $this->auto;
    }
    /**
     * Don't redirect the user directly, send to our detail of the procedure view. But invite the user to click on a button for use this redirection.
     *
     * @param bool $auto
     *
     * @return self
     */
    public function setAuto(bool $auto): self
    {
        $this->auto = $auto;
        return $this;
    }
}
