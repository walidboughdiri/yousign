<?php

namespace IIYousign\Model;

class ServerStampConfig
{
    /**
     *
     *
     * @var ServerStampConfigWebhook
     */
    protected $webhook;
    /**
     *
     *
     * @return ServerStampConfigWebhook
     */
    public function getWebhook(): ServerStampConfigWebhook
    {
        return $this->webhook;
    }
    /**
     *
     *
     * @param ServerStampConfigWebhook $webhook
     *
     * @return self
     */
    public function setWebhook(ServerStampConfigWebhook $webhook): self
    {
        $this->webhook = $webhook;
        return $this;
    }
}
