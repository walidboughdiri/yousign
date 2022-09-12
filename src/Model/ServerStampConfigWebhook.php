<?php

namespace IIYousign\Model;

class ServerStampConfigWebhook
{
    /**
     *
     *
     * @var ConfigWebhookTemplate[]
     */
    protected $serverStampFinished;
    /**
     *
     *
     * @return ConfigWebhookTemplate[]
     */
    public function getServerStampFinished(): array
    {
        return $this->serverStampFinished;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[] $serverStampFinished
     *
     * @return self
     */
    public function setServerStampFinished(array $serverStampFinished): self
    {
        $this->serverStampFinished = $serverStampFinished;
        return $this;
    }
}
