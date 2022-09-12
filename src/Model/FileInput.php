<?php

namespace IIYousign\Model;

class FileInput
{
    /**
     * Name of the file
     *
     * @var string
     */
    protected $name;
    /**
     * Type of the file
     *
     * @var string|null
     */
    protected $type = 'signable';
    /**
     * Password for protected PDF file
     *
     * @var string|null
     */
    protected $password;
    /**
     * Description of the file
     *
     * @var string|null
     */
    protected $description;
    /**
     * Metadata of the file
     *
     * @var FileInputMetadata|null
     */
    protected $metadata;
    /**
     * Content in base 64 of the file
     *
     * @var string
     */
    protected $content;
    /**
     * Id of the procedure
     *
     * @var string|null
     */
    protected $procedure;
    /**
     *
     *
     * @var int|null
     */
    protected $position = 0;
    /**
     * Name of the file
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the file
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
     * Type of the file
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Type of the file
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Password for protected PDF file
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Password for protected PDF file
     *
     * @param string|null $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;
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
     * Metadata of the file
     *
     * @return FileInputMetadata|null
     */
    public function getMetadata(): ?FileInputMetadata
    {
        return $this->metadata;
    }
    /**
     * Metadata of the file
     *
     * @param FileInputMetadata|null $metadata
     *
     * @return self
     */
    public function setMetadata(?FileInputMetadata $metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * Content in base 64 of the file
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Content in base 64 of the file
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * Id of the procedure
     *
     * @return string|null
     */
    public function getProcedure(): ?string
    {
        return $this->procedure;
    }
    /**
     * Id of the procedure
     *
     * @param string|null $procedure
     *
     * @return self
     */
    public function setProcedure(?string $procedure): self
    {
        $this->procedure = $procedure;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     *
     *
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
}
