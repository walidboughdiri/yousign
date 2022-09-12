<?php

namespace IIYousign\Model;

class OperationModeSmsConfiguration
{
    /**
     * Content of your custom sms message. Should contains the substring `{{code}}`
     *
     * @var string
     */
    protected $content;
    /**
     * Content of your custom sms message. Should contains the substring `{{code}}`
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Content of your custom sms message. Should contains the substring `{{code}}`
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
}
