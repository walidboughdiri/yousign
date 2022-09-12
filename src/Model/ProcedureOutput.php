<?php

namespace IIYousign\Model;

class ProcedureOutput
{
    /**
     * Id of the object
     *
     * @var string
     */
    protected $id;
    /**
     * Name of procedure
     *
     * @var string|null
     */
    protected $name;
    /**
     * Description of procedure
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
     * Expiration date. The procedure will be out of usage after this date.
     *
     * @var \DateTime|null
     */
    protected $expiresAt;
    /**
     * Status of the procedure
     *
     * @var string|null
     */
    protected $status;
    /**
     * Id of creator of the object
     *
     * @var string|null
     */
    protected $creator;
    /**
     * The creator's first name
     *
     * @var string|null
     */
    protected $creatorFirstName;
    /**
     * The creator's last name
     *
     * @var string|null
     */
    protected $creatorLastName;
    /**
     * Id of workspace creator of the object
     *
     * @var string|null
     */
    protected $workspace;
    /**
     * Defines if the procedure is a template (if true). A template could be used by a procedure to get all properties of the template. Check parent parameter for more information.
     *
     * @var bool|null
     */
    protected $template;
    /**
     * Defines an order for the procedure process. If true, position of each member will be used to define the validation workflow.
     *
     * @var bool|null
     */
    protected $ordered;
    /**
     * Id of a procedure template used to get all properties of the template in the new procedure. If you set other properties, they will be replaced. If you don’t set other properties, all properties will be cloned.
     *
     * @var string|null
     */
    protected $parent;
    /**
     * Metadata of the procedure
     *
     * @var ProcedureOutputMetadata|null
     */
    protected $metadata;
    /**
     *
     *
     * @var mixed
     */
    protected $config;
    /**
     *
     *
     * @var MemberOutput[]
     */
    protected $members;
    /**
     * List of files used in the procedure.
     *
     * @var FileOutput[]
     */
    protected $files;
    /**
     * Defines if related files are available.
     *
     * @var bool
     */
    protected $relatedFilesEnable;
    /**
     * Defines if the files of the procedure must be archived (Workspace should be allowed)
     *
     * @var bool
     */
    protected $archive = false;
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
     * Name of procedure
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name of procedure
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
     * Description of procedure
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description of procedure
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
     * Expiration date. The procedure will be out of usage after this date.
     *
     * @return \DateTime|null
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }
    /**
     * Expiration date. The procedure will be out of usage after this date.
     *
     * @param \DateTime|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?\DateTime $expiresAt): self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * Status of the procedure
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Status of the procedure
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
     * Id of creator of the object
     *
     * @return string|null
     */
    public function getCreator(): ?string
    {
        return $this->creator;
    }
    /**
     * Id of creator of the object
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
     * The creator's first name
     *
     * @return string|null
     */
    public function getCreatorFirstName(): ?string
    {
        return $this->creatorFirstName;
    }
    /**
     * The creator's first name
     *
     * @param string|null $creatorFirstName
     *
     * @return self
     */
    public function setCreatorFirstName(?string $creatorFirstName): self
    {
        $this->creatorFirstName = $creatorFirstName;
        return $this;
    }
    /**
     * The creator's last name
     *
     * @return string|null
     */
    public function getCreatorLastName(): ?string
    {
        return $this->creatorLastName;
    }
    /**
     * The creator's last name
     *
     * @param string|null $creatorLastName
     *
     * @return self
     */
    public function setCreatorLastName(?string $creatorLastName): self
    {
        $this->creatorLastName = $creatorLastName;
        return $this;
    }
    /**
     * Id of workspace creator of the object
     *
     * @return string|null
     */
    public function getWorkspace(): ?string
    {
        return $this->workspace;
    }
    /**
     * Id of workspace creator of the object
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
     * Defines if the procedure is a template (if true). A template could be used by a procedure to get all properties of the template. Check parent parameter for more information.
     *
     * @return bool|null
     */
    public function getTemplate(): ?bool
    {
        return $this->template;
    }
    /**
     * Defines if the procedure is a template (if true). A template could be used by a procedure to get all properties of the template. Check parent parameter for more information.
     *
     * @param bool|null $template
     *
     * @return self
     */
    public function setTemplate(?bool $template): self
    {
        $this->template = $template;
        return $this;
    }
    /**
     * Defines an order for the procedure process. If true, position of each member will be used to define the validation workflow.
     *
     * @return bool|null
     */
    public function getOrdered(): ?bool
    {
        return $this->ordered;
    }
    /**
     * Defines an order for the procedure process. If true, position of each member will be used to define the validation workflow.
     *
     * @param bool|null $ordered
     *
     * @return self
     */
    public function setOrdered(?bool $ordered): self
    {
        $this->ordered = $ordered;
        return $this;
    }
    /**
     * Id of a procedure template used to get all properties of the template in the new procedure. If you set other properties, they will be replaced. If you don’t set other properties, all properties will be cloned.
     *
     * @return string|null
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }
    /**
     * Id of a procedure template used to get all properties of the template in the new procedure. If you set other properties, they will be replaced. If you don’t set other properties, all properties will be cloned.
     *
     * @param string|null $parent
     *
     * @return self
     */
    public function setParent(?string $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
    /**
     * Metadata of the procedure
     *
     * @return ProcedureOutputMetadata|null
     */
    public function getMetadata(): ?ProcedureOutputMetadata
    {
        return $this->metadata;
    }
    /**
     * Metadata of the procedure
     *
     * @param ProcedureOutputMetadata|null $metadata
     *
     * @return self
     */
    public function setMetadata(?ProcedureOutputMetadata $metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }
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
    /**
     *
     *
     * @return MemberOutput[]
     */
    public function getMembers(): array
    {
        return $this->members;
    }
    /**
     *
     *
     * @param MemberOutput[] $members
     *
     * @return self
     */
    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }
    /**
     * List of files used in the procedure.
     *
     * @return FileOutput[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }
    /**
     * List of files used in the procedure.
     *
     * @param FileOutput[] $files
     *
     * @return self
     */
    public function setFiles(array $files): self
    {
        $this->files = $files;
        return $this;
    }
    /**
     * Defines if related files are available.
     *
     * @return bool
     */
    public function getRelatedFilesEnable(): bool
    {
        return $this->relatedFilesEnable;
    }
    /**
     * Defines if related files are available.
     *
     * @param bool $relatedFilesEnable
     *
     * @return self
     */
    public function setRelatedFilesEnable(bool $relatedFilesEnable): self
    {
        $this->relatedFilesEnable = $relatedFilesEnable;
        return $this;
    }
    /**
     * Defines if the files of the procedure must be archived (Workspace should be allowed)
     *
     * @return bool
     */
    public function getArchive(): bool
    {
        return $this->archive;
    }
    /**
     * Defines if the files of the procedure must be archived (Workspace should be allowed)
     *
     * @param bool $archive
     *
     * @return self
     */
    public function setArchive(bool $archive): self
    {
        $this->archive = $archive;
        return $this;
    }
}
