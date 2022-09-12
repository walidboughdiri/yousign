<?php

namespace IIYousign\Model;

class ConsentProcessValueOutput
{
    /**
     * id of object
     *
     * @var string
     */
    protected $id;
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
     * @var string
     */
    protected $value;
    /**
     * Date of creation
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * id of object
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * id of object
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }
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
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Value of concent process value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Date of creation
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date of creation
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}
