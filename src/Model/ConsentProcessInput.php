<?php

namespace IIYousign\Model;

class ConsentProcessInput
{
    /**
     * Type of operation
     *
     * @var string
     */
    protected $type;
    /**
     * Description of consent Process
     *
     * @var string|null
     */
    protected $description;
    /**
     * Consent process is required
     *
     * @var bool|null
     */
    protected $required = true;
    /**
     * Position of consent process
     *
     * @var int|null
     */
    protected $position;
    /**
     * Expected value for consent process value
     *
     * @var string|null
     */
    protected $expectedValue;
    /**
     * List of members attached to consent process
     *
     * @var string[]
     */
    protected $members;
    /**
     * File attached to consent process
     *
     * @var string|null
     */
    protected $file;
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
     * Description of consent Process
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description of consent Process
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
     * Consent process is required
     *
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }
    /**
     * Consent process is required
     *
     * @param bool|null $required
     *
     * @return self
     */
    public function setRequired(?bool $required): self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * Position of consent process
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Position of consent process
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
    /**
     * Expected value for consent process value
     *
     * @return string|null
     */
    public function getExpectedValue(): ?string
    {
        return $this->expectedValue;
    }
    /**
     * Expected value for consent process value
     *
     * @param string|null $expectedValue
     *
     * @return self
     */
    public function setExpectedValue(?string $expectedValue): self
    {
        $this->expectedValue = $expectedValue;
        return $this;
    }
    /**
     * List of members attached to consent process
     *
     * @return string[]
     */
    public function getMembers(): array
    {
        return $this->members;
    }
    /**
     * List of members attached to consent process
     *
     * @param string[] $members
     *
     * @return self
     */
    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }
    /**
     * File attached to consent process
     *
     * @return string|null
     */
    public function getFile(): ?string
    {
        return $this->file;
    }
    /**
     * File attached to consent process
     *
     * @param string|null $file
     *
     * @return self
     */
    public function setFile(?string $file): self
    {
        $this->file = $file;
        return $this;
    }
}
