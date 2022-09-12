<?php

namespace IIYousign\Model;

class WorkspaceConfigProcedure
{
    /**
     *
     *
     * @var string[]
     */
    protected $authenticationModes;
    /**
     *
     *
     * @return string[]
     */
    public function getAuthenticationModes(): array
    {
        return $this->authenticationModes;
    }
    /**
     *
     *
     * @param string[] $authenticationModes
     *
     * @return self
     */
    public function setAuthenticationModes(array $authenticationModes): self
    {
        $this->authenticationModes = $authenticationModes;
        return $this;
    }
}
