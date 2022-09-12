<?php

namespace IIYousign\Model;

class ProcedureConfig
{
    /**
     *
     *
     * @var mixed
     */
    protected $email;
    /**
     *
     *
     * @var ProcedureConfigReminder[]|null
     */
    protected $reminders;
    /**
     *
     *
     * @var ProcedureConfigWebhook
     */
    protected $webhook;
    /**
     *
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     *
     *
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     *
     *
     * @return ProcedureConfigReminder[]|null
     */
    public function getReminders(): ?array
    {
        return $this->reminders;
    }
    /**
     *
     *
     * @param ProcedureConfigReminder[]|null $reminders
     *
     * @return self
     */
    public function setReminders(?array $reminders): self
    {
        $this->reminders = $reminders;
        return $this;
    }
    /**
     *
     *
     * @return ProcedureConfigWebhook
     */
    public function getWebhook(): ProcedureConfigWebhook
    {
        return $this->webhook;
    }
    /**
     *
     *
     * @param ProcedureConfigWebhook $webhook
     *
     * @return self
     */
    public function setWebhook(ProcedureConfigWebhook $webhook): self
    {
        $this->webhook = $webhook;
        return $this;
    }
}
