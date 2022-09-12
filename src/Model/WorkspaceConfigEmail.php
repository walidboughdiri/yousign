<?php

namespace IIYousign\Model;

class WorkspaceConfigEmail
{
    /**
     *
     *
     * @var ConfigEmailTemplate[]
     */
    protected $procedureStarted;
    /**
     *
     *
     * @var ConfigEmailTemplate[]
     */
    protected $procedureFinished;
    /**
     *
     *
     * @var ConfigEmailTemplate[]
     */
    protected $procedureRefused;
    /**
     *
     *
     * @var ConfigEmailTemplate[]
     */
    protected $procedureExpired;
    /**
     *
     *
     * @var ConfigEmailTemplate[]
     */
    protected $procedureDeleted;
    /**
     *
     *
     * @var ConfigEmailTemplate[]
     */
    protected $memberStarted;
    /**
     *
     *
     * @var ConfigEmailTemplate[]
     */
    protected $memberFinished;
    /**
     *
     *
     * @var ConfigEmailTemplate[]
     */
    protected $commentCreated;
    /**
     *
     *
     * @return ConfigEmailTemplate[]
     */
    public function getProcedureStarted(): array
    {
        return $this->procedureStarted;
    }
    /**
     *
     *
     * @param ConfigEmailTemplate[] $procedureStarted
     *
     * @return self
     */
    public function setProcedureStarted(array $procedureStarted): self
    {
        $this->procedureStarted = $procedureStarted;
        return $this;
    }
    /**
     *
     *
     * @return ConfigEmailTemplate[]
     */
    public function getProcedureFinished(): array
    {
        return $this->procedureFinished;
    }
    /**
     *
     *
     * @param ConfigEmailTemplate[] $procedureFinished
     *
     * @return self
     */
    public function setProcedureFinished(array $procedureFinished): self
    {
        $this->procedureFinished = $procedureFinished;
        return $this;
    }
    /**
     *
     *
     * @return ConfigEmailTemplate[]
     */
    public function getProcedureRefused(): array
    {
        return $this->procedureRefused;
    }
    /**
     *
     *
     * @param ConfigEmailTemplate[] $procedureRefused
     *
     * @return self
     */
    public function setProcedureRefused(array $procedureRefused): self
    {
        $this->procedureRefused = $procedureRefused;
        return $this;
    }
    /**
     *
     *
     * @return ConfigEmailTemplate[]
     */
    public function getProcedureExpired(): array
    {
        return $this->procedureExpired;
    }
    /**
     *
     *
     * @param ConfigEmailTemplate[] $procedureExpired
     *
     * @return self
     */
    public function setProcedureExpired(array $procedureExpired): self
    {
        $this->procedureExpired = $procedureExpired;
        return $this;
    }
    /**
     *
     *
     * @return ConfigEmailTemplate[]
     */
    public function getProcedureDeleted(): array
    {
        return $this->procedureDeleted;
    }
    /**
     *
     *
     * @param ConfigEmailTemplate[] $procedureDeleted
     *
     * @return self
     */
    public function setProcedureDeleted(array $procedureDeleted): self
    {
        $this->procedureDeleted = $procedureDeleted;
        return $this;
    }
    /**
     *
     *
     * @return ConfigEmailTemplate[]
     */
    public function getMemberStarted(): array
    {
        return $this->memberStarted;
    }
    /**
     *
     *
     * @param ConfigEmailTemplate[] $memberStarted
     *
     * @return self
     */
    public function setMemberStarted(array $memberStarted): self
    {
        $this->memberStarted = $memberStarted;
        return $this;
    }
    /**
     *
     *
     * @return ConfigEmailTemplate[]
     */
    public function getMemberFinished(): array
    {
        return $this->memberFinished;
    }
    /**
     *
     *
     * @param ConfigEmailTemplate[] $memberFinished
     *
     * @return self
     */
    public function setMemberFinished(array $memberFinished): self
    {
        $this->memberFinished = $memberFinished;
        return $this;
    }
    /**
     *
     *
     * @return ConfigEmailTemplate[]
     */
    public function getCommentCreated(): array
    {
        return $this->commentCreated;
    }
    /**
     *
     *
     * @param ConfigEmailTemplate[] $commentCreated
     *
     * @return self
     */
    public function setCommentCreated(array $commentCreated): self
    {
        $this->commentCreated = $commentCreated;
        return $this;
    }
}
