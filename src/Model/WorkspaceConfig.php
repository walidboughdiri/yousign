<?php

namespace IIYousign\Model;

class WorkspaceConfig
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
     * @var WorkspaceConfigProcedure
     */
    protected $procedure;
    /**
     *
     *
     * @var WorkspaceConfigEmail
     */
    protected $email;
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
    /**
     *
     *
     * @return WorkspaceConfigProcedure
     */
    public function getProcedure(): WorkspaceConfigProcedure
    {
        return $this->procedure;
    }
    /**
     *
     *
     * @param WorkspaceConfigProcedure $procedure
     *
     * @return self
     */
    public function setProcedure(WorkspaceConfigProcedure $procedure): self
    {
        $this->procedure = $procedure;
        return $this;
    }
    /**
     *
     *
     * @return WorkspaceConfigEmail
     */
    public function getEmail(): WorkspaceConfigEmail
    {
        return $this->email;
    }
    /**
     *
     *
     * @param WorkspaceConfigEmail $email
     *
     * @return self
     */
    public function setEmail(WorkspaceConfigEmail $email): self
    {
        $this->email = $email;
        return $this;
    }
}
