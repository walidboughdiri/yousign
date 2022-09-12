<?php

namespace IIYousign\Model;

class ConsentProcessValueInput
{
    /**
     * Consent process attached to concent process value
     *
     * @var string
     */
    protected $consentProcess;
    /**
     * Member attached to concent process value
     *
     * @var string
     */
    protected $member;
    /**
     * Value of concent process value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Consent process attached to concent process value
     *
     * @return string
     */
    public function getConsentProcess(): string
    {
        return $this->consentProcess;
    }
    /**
     * Consent process attached to concent process value
     *
     * @param string $consentProcess
     *
     * @return self
     */
    public function setConsentProcess(string $consentProcess): self
    {
        $this->consentProcess = $consentProcess;
        return $this;
    }
    /**
     * Member attached to concent process value
     *
     * @return string
     */
    public function getMember(): string
    {
        return $this->member;
    }
    /**
     * Member attached to concent process value
     *
     * @param string $member
     *
     * @return self
     */
    public function setMember(string $member): self
    {
        $this->member = $member;
        return $this;
    }
    /**
     * Value of concent process value
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Value of concent process value
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
