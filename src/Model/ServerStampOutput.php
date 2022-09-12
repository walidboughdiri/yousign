<?php

namespace IIYousign\Model;

class ServerStampOutput
{
    /**
     * Resource server stamp uri
     *
     * @var string
     */
    protected $id;
    /**
     * Resource file uri
     *
     * @var string
     */
    protected $file;
    /**
     * Resource certificate uri (please contact support for more informations)
     *
     * @var string
     */
    protected $certificate;
    /**
     *
     *
     * @var ServerStampConfig[]
     */
    protected $config;
    /**
     *
     *
     * @var FileObjectOutputWithoutFileReference[]
     */
    protected $fileObjects;
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
     * Date of end
     *
     * @var \DateTime
     */
    protected $finishedAt;
    /**
     *
     *
     * @var string
     */
    protected $status;
    /**
     * Resource workspace uri
     *
     * @var string
     */
    protected $workspace;
    /**
     * Resource server stamp uri
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Resource server stamp uri
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
     * Resource file uri
     *
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }
    /**
     * Resource file uri
     *
     * @param string $file
     *
     * @return self
     */
    public function setFile(string $file): self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * Resource certificate uri (please contact support for more informations)
     *
     * @return string
     */
    public function getCertificate(): string
    {
        return $this->certificate;
    }
    /**
     * Resource certificate uri (please contact support for more informations)
     *
     * @param string $certificate
     *
     * @return self
     */
    public function setCertificate(string $certificate): self
    {
        $this->certificate = $certificate;
        return $this;
    }
    /**
     *
     *
     * @return ServerStampConfig[]
     */
    public function getConfig(): array
    {
        return $this->config;
    }
    /**
     *
     *
     * @param ServerStampConfig[] $config
     *
     * @return self
     */
    public function setConfig(array $config): self
    {
        $this->config = $config;
        return $this;
    }
    /**
     *
     *
     * @return FileObjectOutputWithoutFileReference[]
     */
    public function getFileObjects(): array
    {
        return $this->fileObjects;
    }
    /**
     *
     *
     * @param FileObjectOutputWithoutFileReference[] $fileObjects
     *
     * @return self
     */
    public function setFileObjects(array $fileObjects): self
    {
        $this->fileObjects = $fileObjects;
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
     * Date of end
     *
     * @return \DateTime
     */
    public function getFinishedAt(): \DateTime
    {
        return $this->finishedAt;
    }
    /**
     * Date of end
     *
     * @param \DateTime $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(\DateTime $finishedAt): self
    {
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     *
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
     * Resource workspace uri
     *
     * @return string
     */
    public function getWorkspace(): string
    {
        return $this->workspace;
    }
    /**
     * Resource workspace uri
     *
     * @param string $workspace
     *
     * @return self
     */
    public function setWorkspace(string $workspace): self
    {
        $this->workspace = $workspace;
        return $this;
    }
}
