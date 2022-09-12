<?php

namespace IIYousign\Model;

class ProcedureRemindInput
{
    /**
     *
     *
     * @var mixed
     */
    protected $config;
    /**
     *
     *
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     *
     *
     * @param mixed $config
     *
     * @return self
     */
    public function setConfig($config): self
    {
        $this->config = $config;
        return $this;
    }
}
