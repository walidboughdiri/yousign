<?php

namespace IIYousign\Model;

class ProcedureConfigWebhook
{
    /**
     *
     *
     * @var ConfigWebhookTemplate[]|null
     */
    protected $procedureStarted;
    /**
     *
     *
     * @var ConfigWebhookTemplate[]|null
     */
    protected $procedureFinished;
    /**
     *
     *
     * @var ConfigWebhookTemplate[]|null
     */
    protected $procedureRefused;
    /**
     *
     *
     * @var ConfigWebhookTemplate[]|null
     */
    protected $procedureExpired;
    /**
     *
     *
     * @var ConfigWebhookTemplate[]|null
     */
    protected $procedureDeleted;
    /**
     *
     *
     * @var ConfigWebhookTemplate[]|null
     */
    protected $procedureError;
    /**
     *
     *
     * @var ConfigWebhookTemplate[]|null
     */
    protected $memberStarted;
    /**
     *
     *
     * @var ConfigWebhookTemplate[]|null
     */
    protected $memberFinished;
    /**
     *
     *
     * @var ConfigWebhookTemplate[]|null
     */
    protected $commentCreated;
    /**
     *
     *
     * @return ConfigWebhookTemplate[]|null
     */
    public function getProcedureStarted(): ?array
    {
        return $this->procedureStarted;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[]|null $procedureStarted
     *
     * @return self
     */
    public function setProcedureStarted(?array $procedureStarted): self
    {
        $this->procedureStarted = $procedureStarted;
        return $this;
    }
    /**
     *
     *
     * @return ConfigWebhookTemplate[]|null
     */
    public function getProcedureFinished(): ?array
    {
        return $this->procedureFinished;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[]|null $procedureFinished
     *
     * @return self
     */
    public function setProcedureFinished(?array $procedureFinished): self
    {
        $this->procedureFinished = $procedureFinished;
        return $this;
    }
    /**
     *
     *
     * @return ConfigWebhookTemplate[]|null
     */
    public function getProcedureRefused(): ?array
    {
        return $this->procedureRefused;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[]|null $procedureRefused
     *
     * @return self
     */
    public function setProcedureRefused(?array $procedureRefused): self
    {
        $this->procedureRefused = $procedureRefused;
        return $this;
    }
    /**
     *
     *
     * @return ConfigWebhookTemplate[]|null
     */
    public function getProcedureExpired(): ?array
    {
        return $this->procedureExpired;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[]|null $procedureExpired
     *
     * @return self
     */
    public function setProcedureExpired(?array $procedureExpired): self
    {
        $this->procedureExpired = $procedureExpired;
        return $this;
    }
    /**
     *
     *
     * @return ConfigWebhookTemplate[]|null
     */
    public function getProcedureDeleted(): ?array
    {
        return $this->procedureDeleted;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[]|null $procedureDeleted
     *
     * @return self
     */
    public function setProcedureDeleted(?array $procedureDeleted): self
    {
        $this->procedureDeleted = $procedureDeleted;
        return $this;
    }
    /**
     *
     *
     * @return ConfigWebhookTemplate[]|null
     */
    public function getProcedureError(): ?array
    {
        return $this->procedureError;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[]|null $procedureError
     *
     * @return self
     */
    public function setProcedureError(?array $procedureError): self
    {
        $this->procedureError = $procedureError;
        return $this;
    }
    /**
     *
     *
     * @return ConfigWebhookTemplate[]|null
     */
    public function getMemberStarted(): ?array
    {
        return $this->memberStarted;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[]|null $memberStarted
     *
     * @return self
     */
    public function setMemberStarted(?array $memberStarted): self
    {
        $this->memberStarted = $memberStarted;
        return $this;
    }
    /**
     *
     *
     * @return ConfigWebhookTemplate[]|null
     */
    public function getMemberFinished(): ?array
    {
        return $this->memberFinished;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[]|null $memberFinished
     *
     * @return self
     */
    public function setMemberFinished(?array $memberFinished): self
    {
        $this->memberFinished = $memberFinished;
        return $this;
    }
    /**
     *
     *
     * @return ConfigWebhookTemplate[]|null
     */
    public function getCommentCreated(): ?array
    {
        return $this->commentCreated;
    }
    /**
     *
     *
     * @param ConfigWebhookTemplate[]|null $commentCreated
     *
     * @return self
     */
    public function setCommentCreated(?array $commentCreated): self
    {
        $this->commentCreated = $commentCreated;
        return $this;
    }
}
