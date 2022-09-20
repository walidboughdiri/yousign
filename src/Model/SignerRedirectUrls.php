<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Model;

class SignerRedirectUrls
{
    /**
     * @var string|null
     */
    protected $success;
    /**
     * @var string|null
     */
    protected $error;

    public function getSuccess(): ?string
    {
        return $this->success;
    }

    public function setSuccess(?string $success): self
    {
        $this->success = $success;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }
}
