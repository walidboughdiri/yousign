<?php

namespace IIYousign\Model;

class AuthenticationsInweboIdPutBody
{
    /**
     * Image of signature (base 64)
     *
     * @var string
     */
    protected $signImage;
    /**
     * Image of signature (base 64)
     *
     * @return string
     */
    public function getSignImage(): string
    {
        return $this->signImage;
    }
    /**
     * Image of signature (base 64)
     *
     * @param string $signImage
     *
     * @return self
     */
    public function setSignImage(string $signImage): self
    {
        $this->signImage = $signImage;
        return $this;
    }
}
