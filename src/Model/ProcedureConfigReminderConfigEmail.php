<?php

namespace IIYousign\Model;

class ProcedureConfigReminderConfigEmail
{
    /**
     *
     *
     * @var ConfigEmailTemplate[]
     */
    protected $reminderExecuted;
    /**
     *
     *
     * @return ConfigEmailTemplate[]
     */
    public function getReminderExecuted(): array
    {
        return $this->reminderExecuted;
    }
    /**
     *
     *
     * @param ConfigEmailTemplate[] $reminderExecuted
     *
     * @return self
     */
    public function setReminderExecuted(array $reminderExecuted): self
    {
        $this->reminderExecuted = $reminderExecuted;
        return $this;
    }
}
