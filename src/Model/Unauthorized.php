<?php

namespace IIYousign\Model;

class Unauthorized
{
    /**
     *
     *
     * @var string|null
     */
    protected $errorDescription;
    /**
     *
     *
     * @var string|null
     */
    protected $error;
    /**
     *
     *
     * @return string|null
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
    /**
     *
     *
     * @param string|null $errorDescription
     *
     * @return self
     */
    public function setErrorDescription(?string $errorDescription): self
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     *
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }
}
