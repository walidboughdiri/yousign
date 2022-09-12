<?php

namespace IIYousign\Model;

class FileOutput
{
    /**
     * Id of the object
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the file
     *
     * @var string|null
     */
    protected $name;
    /**
     * Type of file
     *
     * @var string
     */
    protected $type;
    /**
     * Type of content
     *
     * @var string|null
     */
    protected $contentType;
    /**
     * Description of the file
     *
     * @var string|null
     */
    protected $description;
    /**
     * Date of creation
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date of last update
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Metadata of the file
     *
     * @var FileOutputMetadata|null
     */
    protected $metadata;
    /**
     * Id of workspace
     *
     * @var string|null
     */
    protected $workspace;
    /**
     * Id of creator
     *
     * @var string|null
     */
    protected $creator;
    /**
     * File hash
     *
     * @var string|null
     */
    protected $sha256;
    /**
     *
     *
     * @var int
     */
    protected $position = 0;
    /**
     * Id of the object
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of the object
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
     * Name of the file
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name of the file
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Type of file
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of file
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
     * Type of content
     *
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    /**
     * Type of content
     *
     * @param string|null $contentType
     *
     * @return self
     */
    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * Description of the file
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description of the file
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
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
     * Date of last update
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date of last update
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
     * Metadata of the file
     *
     * @return FileOutputMetadata|null
     */
    public function getMetadata(): ?FileOutputMetadata
    {
        return $this->metadata;
    }
    /**
     * Metadata of the file
     *
     * @param FileOutputMetadata|null $metadata
     *
     * @return self
     */
    public function setMetadata(?FileOutputMetadata $metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * Id of workspace
     *
     * @return string|null
     */
    public function getWorkspace(): ?string
    {
        return $this->workspace;
    }
    /**
     * Id of workspace
     *
     * @param string|null $workspace
     *
     * @return self
     */
    public function setWorkspace(?string $workspace): self
    {
        $this->workspace = $workspace;
        return $this;
    }
    /**
     * Id of creator
     *
     * @return string|null
     */
    public function getCreator(): ?string
    {
        return $this->creator;
    }
    /**
     * Id of creator
     *
     * @param string|null $creator
     *
     * @return self
     */
    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * File hash
     *
     * @return string|null
     */
    public function getSha256(): ?string
    {
        return $this->sha256;
    }
    /**
     * File hash
     *
     * @param string|null $sha256
     *
     * @return self
     */
    public function setSha256(?string $sha256): self
    {
        $this->sha256 = $sha256;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     *
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }
}
