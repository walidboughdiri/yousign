<?php

namespace IIYousign\Model;

class UserInputNotifications
{
    /**
     *
     *
     * @var bool
     */
    protected $procedure;
    /**
     *
     *
     * @return bool
     */
    public function getProcedure(): bool
    {
        return $this->procedure;
    }
    /**
     *
     *
     * @param bool $procedure
     *
     * @return self
     */
    public function setProcedure(bool $procedure): self
    {
        $this->procedure = $procedure;
        return $this;
    }
}
