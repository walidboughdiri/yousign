<?php

namespace IIYousign\Model;

class AuthenticationsEmailIdPutBody
{
    /**
     * Code sms received by user
     *
     * @var string
     */
    protected $code;
    /**
     * Image of signature (base 64)
     *
     * @var string
     */
    protected $signImage;
    /**
     * Code sms received by user
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Code sms received by user
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
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
