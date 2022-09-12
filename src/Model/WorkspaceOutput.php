<?php

namespace IIYousign\Model;

class WorkspaceOutput
{
    /**
     * Object's ID
     *
     * @var string
     */
    protected $id;
    /**
     * Workspace name
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var WorkspaceConfig
     */
    protected $config;
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
     *
     *
     * @var string
     */
    protected $emailProcedureFromName;
    /**
     *
     *
     * @var string[]
     */
    protected $contactFieldVisibility;
    /**
     *
     *
     * @var string
     */
    protected $slug;
    /**
     *
     *
     * @var bool
     */
    protected $hasCustomLogo;
    /**
     * Object's ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Object's ID
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
     * Workspace name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Workspace name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     *
     *
     * @return WorkspaceConfig
     */
    public function getConfig(): WorkspaceConfig
    {
        return $this->config;
    }
    /**
     *
     *
     * @param WorkspaceConfig $config
     *
     * @return self
     */
    public function setConfig(WorkspaceConfig $config): self
    {
        $this->config = $config;
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
     *
     *
     * @return string
     */
    public function getEmailProcedureFromName(): string
    {
        return $this->emailProcedureFromName;
    }
    /**
     *
     *
     * @param string $emailProcedureFromName
     *
     * @return self
     */
    public function setEmailProcedureFromName(string $emailProcedureFromName): self
    {
        $this->emailProcedureFromName = $emailProcedureFromName;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getContactFieldVisibility(): array
    {
        return $this->contactFieldVisibility;
    }
    /**
     *
     *
     * @param string[] $contactFieldVisibility
     *
     * @return self
     */
    public function setContactFieldVisibility(array $contactFieldVisibility): self
    {
        $this->contactFieldVisibility = $contactFieldVisibility;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     *
     *
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getHasCustomLogo(): bool
    {
        return $this->hasCustomLogo;
    }
    /**
     *
     *
     * @param bool $hasCustomLogo
     *
     * @return self
     */
    public function setHasCustomLogo(bool $hasCustomLogo): self
    {
        $this->hasCustomLogo = $hasCustomLogo;
        return $this;
    }
}
