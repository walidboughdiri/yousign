<?php

namespace IIYousign\Model;

class ServerStampInput
{
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
     * @var ServerStampConfig[]|null
     */
    protected $config;
    /**
     *
     *
     * @var FileObjectInputWithoutFileReference[]
     */
    protected $fileObjects;
    /**
     * Image signature in base 64
     *
     * @var string|null
     */
    protected $signImage;
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
     * @return ServerStampConfig[]|null
     */
    public function getConfig(): ?array
    {
        return $this->config;
    }
    /**
     *
     *
     * @param ServerStampConfig[]|null $config
     *
     * @return self
     */
    public function setConfig(?array $config): self
    {
        $this->config = $config;
        return $this;
    }
    /**
     *
     *
     * @return FileObjectInputWithoutFileReference[]
     */
    public function getFileObjects(): array
    {
        return $this->fileObjects;
    }
    /**
     *
     *
     * @param FileObjectInputWithoutFileReference[] $fileObjects
     *
     * @return self
     */
    public function setFileObjects(array $fileObjects): self
    {
        $this->fileObjects = $fileObjects;
        return $this;
    }
    /**
     * Image signature in base 64
     *
     * @return string|null
     */
    public function getSignImage(): ?string
    {
        return $this->signImage;
    }
    /**
     * Image signature in base 64
     *
     * @param string|null $signImage
     *
     * @return self
     */
    public function setSignImage(?string $signImage): self
    {
        $this->signImage = $signImage;
        return $this;
    }
}
