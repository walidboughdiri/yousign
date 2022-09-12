<?php

namespace IIYousign\Model;

class ProcedureDuplicateInput
{
    /**
     * Defines if the new procedure should be started after the duplication
     *
     * @var bool|null
     */
    protected $start = false;
    /**
     * Override the parent value for this property and defines if the new procedure should be a template or not
     *
     * @var bool
     */
    protected $template;
    /**
     * Defines if the new procedure should be started after the duplication
     *
     * @return bool|null
     */
    public function getStart(): ?bool
    {
        return $this->start;
    }
    /**
     * Defines if the new procedure should be started after the duplication
     *
     * @param bool|null $start
     *
     * @return self
     */
    public function setStart(?bool $start): self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * Override the parent value for this property and defines if the new procedure should be a template or not
     *
     * @return bool
     */
    public function getTemplate(): bool
    {
        return $this->template;
    }
    /**
     * Override the parent value for this property and defines if the new procedure should be a template or not
     *
     * @param bool $template
     *
     * @return self
     */
    public function setTemplate(bool $template): self
    {
        $this->template = $template;
        return $this;
    }
}
