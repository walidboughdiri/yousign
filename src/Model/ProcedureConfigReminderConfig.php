<?php

namespace IIYousign\Model;

class ProcedureConfigReminderConfig
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
}
