<?php

namespace IIYousign\Model;

class ConfigEmailTemplate
{
    /**
     * Reference or email of recipients
     *
     * @var string[]
     */
    protected $to;
    /**
     * Subject of the mail
     *
     * @var string
     */
    protected $subject;
    /**
     * Object of the mail
     *
     * @var string
     */
    protected $message;
    /**
     * Modify the from name
     *
     * @var string
     */
    protected $fromName = 'Yousign';
    /**
     * Reference or email of recipients
     *
     * @return string[]
     */
    public function getTo(): array
    {
        return $this->to;
    }
    /**
     * Reference or email of recipients
     *
     * @param string[] $to
     *
     * @return self
     */
    public function setTo(array $to): self
    {
        $this->to = $to;
        return $this;
    }
    /**
     * Subject of the mail
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
    /**
     * Subject of the mail
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     * Object of the mail
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Object of the mail
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Modify the from name
     *
     * @return string
     */
    public function getFromName(): string
    {
        return $this->fromName;
    }
    /**
     * Modify the from name
     *
     * @param string $fromName
     *
     * @return self
     */
    public function setFromName(string $fromName): self
    {
        $this->fromName = $fromName;
        return $this;
    }
}
