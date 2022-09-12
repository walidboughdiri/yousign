<?php

namespace IIYousign\Model;

class OperationInput
{
    /**
     * Type of operation
     *
     * @var string
     */
    protected $type;
    /**
     * Mode of authentication
     *
     * @var string
     */
    protected $mode;
    /**
     *
     *
     * @var bool|null
     */
    protected $allMembers = false;
    /**
     *
     *
     * @var string[]|null
     */
    protected $members;
    /**
     * Status of operation
     *
     * @var string|null
     */
    protected $status;
    /**
     *
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Metadata of the operation
     *
     * @var OperationInputMetadata|null
     */
    protected $metadata;
    /**
     * Type of operation
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of operation
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Mode of authentication
     *
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }
    /**
     * Mode of authentication
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getAllMembers(): ?bool
    {
        return $this->allMembers;
    }
    /**
     *
     *
     * @param bool|null $allMembers
     *
     * @return self
     */
    public function setAllMembers(?bool $allMembers): self
    {
        $this->allMembers = $allMembers;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }
    /**
     *
     *
     * @param string[]|null $members
     *
     * @return self
     */
    public function setMembers(?array $members): self
    {
        $this->members = $members;
        return $this;
    }
    /**
     * Status of operation
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Status of operation
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     *
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Metadata of the operation
     *
     * @return OperationInputMetadata|null
     */
    public function getMetadata(): ?OperationInputMetadata
    {
        return $this->metadata;
    }
    /**
     * Metadata of the operation
     *
     * @param OperationInputMetadata|null $metadata
     *
     * @return self
     */
    public function setMetadata(?OperationInputMetadata $metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }
}
