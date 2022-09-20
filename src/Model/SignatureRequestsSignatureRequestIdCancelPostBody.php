<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Model;

class SignatureRequestsSignatureRequestIdCancelPostBody
{
    /**
     * @var string
     */
    protected $reason;
    /**
     * @var string|null
     */
    protected $customNote;

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getCustomNote(): ?string
    {
        return $this->customNote;
    }

    public function setCustomNote(?string $customNote): self
    {
        $this->customNote = $customNote;

        return $this;
    }
}