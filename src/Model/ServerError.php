<?php

namespace IIYousign\Model;

class ServerError
{
    /**
     *
     *
     * @var string|null
     */
    protected $message;
    /**
     *
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     *
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }
}
