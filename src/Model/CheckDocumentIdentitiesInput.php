<?php

namespace IIYousign\Model;

class CheckDocumentIdentitiesInput
{
    /**
     * Content in base 64 of the document to check
     *
     * @var string
     */
    protected $file;
    /**
     * List of firstnames to check on document
     *
     * @var string[]
     */
    protected $firstNames;
    /**
     * Birth name to check on document
     *
     * @var string
     */
    protected $birthName;
    /**
     * Birth date to check on document
     *
     * @var \DateTime
     */
    protected $birthDate;
    /**
     * Content in base 64 of the document to check
     *
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }
    /**
     * Content in base 64 of the document to check
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
     * List of firstnames to check on document
     *
     * @return string[]
     */
    public function getFirstNames(): array
    {
        return $this->firstNames;
    }
    /**
     * List of firstnames to check on document
     *
     * @param string[] $firstNames
     *
     * @return self
     */
    public function setFirstNames(array $firstNames): self
    {
        $this->firstNames = $firstNames;
        return $this;
    }
    /**
     * Birth name to check on document
     *
     * @return string
     */
    public function getBirthName(): string
    {
        return $this->birthName;
    }
    /**
     * Birth name to check on document
     *
     * @param string $birthName
     *
     * @return self
     */
    public function setBirthName(string $birthName): self
    {
        $this->birthName = $birthName;
        return $this;
    }
    /**
     * Birth date to check on document
     *
     * @return \DateTime
     */
    public function getBirthDate(): \DateTime
    {
        return $this->birthDate;
    }
    /**
     * Birth date to check on document
     *
     * @param \DateTime $birthDate
     *
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate): self
    {
        $this->birthDate = $birthDate;
        return $this;
    }
}
