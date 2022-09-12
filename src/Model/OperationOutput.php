<?php

namespace IIYousign\Model;

class OperationOutput
{
    /**
     * Id of operation
     *
     * @var string
     */
    protected $id;
    /**
     * Date of creation
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Last date of update
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     *
     *
     * @var AuthenticationInweboOutput
     */
    protected $authentication;
    /**
     * Mode of authentication
     *
     * @var string
     */
    protected $mode;
    /**
     * Status of operation
     *
     * @var string
     */
    protected $status;
    /**
     * Type of operation
     *
     * @var string
     */
    protected $type;
    /**
     * Metadata of the operation
     *
     * @var OperationOutputMetadata
     */
    protected $metadata;
    /**
     * Id of operation
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of operation
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Date of creation
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date of creation
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Last date of update
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last date of update
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     *
     *
     * @return AuthenticationInweboOutput
     */
    public function getAuthentication(): AuthenticationInweboOutput
    {
        return $this->authentication;
    }
    /**
     *
     *
     * @param AuthenticationInweboOutput $authentication
     *
     * @return self
     */
    public function setAuthentication(AuthenticationInweboOutput $authentication): self
    {
        $this->authentication = $authentication;
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
     * Status of operation
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Status of operation
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
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
     * Metadata of the operation
     *
     * @return OperationOutputMetadata
     */
    public function getMetadata(): OperationOutputMetadata
    {
        return $this->metadata;
    }
    /**
     * Metadata of the operation
     *
     * @param OperationOutputMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(OperationOutputMetadata $metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }
}
