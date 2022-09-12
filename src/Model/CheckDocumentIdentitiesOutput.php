<?php

namespace IIYousign\Model;

class CheckDocumentIdentitiesOutput
{
    /**
     * Id of the object
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
     * Date of last update
     *
     * @var \DateTime
     */
    protected $updatedAt;
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
     * workspace creator of the object
     *
     * @var string
     */
    protected $workspace;
    /**
     * Creator of the object
     *
     * @var string
     */
    protected $creator;
    /**
     * Type of document
     *
     * @var string
     */
    protected $documentType;
    /**
     * Extracted firstnames on the document
     *
     * @var string[]
     */
    protected $extractedFirstNames;
    /**
     * Extracted birth name on the document
     *
     * @var string
     */
    protected $extractedBirthName;
    /**
     * Extracted birth date on the document
     *
     * @var \DateTime
     */
    protected $extractedBirthDate;
    /**
     * Extracted gender on the document
     *
     * @var string
     */
    protected $extractedGender;
    /**
     * Extracted issuance date on the document
     *
     * @var \DateTime
     */
    protected $extractedIssuanceDate;
    /**
     * Extracted expiration date on the document
     *
     * @var \DateTime
     */
    protected $extractedExpirationDate;
    /**
     * Extracted MRZ on the document
     *
     * @var string[]
     */
    protected $extractedMrz;
    /**
     * Defines if one firstname sent in the input is valid
     *
     * @var bool
     */
    protected $firstNameValid;
    /**
     * Defines if birth name sent in the input is valid
     *
     * @var bool
     */
    protected $birthNameValid;
    /**
     * Defines if MRZ sent in the input is valid
     *
     * @var bool
     */
    protected $mrzValid;
    /**
     * Defines if the document is expired
     *
     * @var bool
     */
    protected $expired;
    /**
     * Defines if the document is valid
     *
     * @var bool
     */
    protected $valid;
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
    /**
     * workspace creator of the object
     *
     * @return string
     */
    public function getWorkspace(): string
    {
        return $this->workspace;
    }
    /**
     * workspace creator of the object
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
    /**
     * Creator of the object
     *
     * @return string
     */
    public function getCreator(): string
    {
        return $this->creator;
    }
    /**
     * Creator of the object
     *
     * @param string $creator
     *
     * @return self
     */
    public function setCreator(string $creator): self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * Type of document
     *
     * @return string
     */
    public function getDocumentType(): string
    {
        return $this->documentType;
    }
    /**
     * Type of document
     *
     * @param string $documentType
     *
     * @return self
     */
    public function setDocumentType(string $documentType): self
    {
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Extracted firstnames on the document
     *
     * @return string[]
     */
    public function getExtractedFirstNames(): array
    {
        return $this->extractedFirstNames;
    }
    /**
     * Extracted firstnames on the document
     *
     * @param string[] $extractedFirstNames
     *
     * @return self
     */
    public function setExtractedFirstNames(array $extractedFirstNames): self
    {
        $this->extractedFirstNames = $extractedFirstNames;
        return $this;
    }
    /**
     * Extracted birth name on the document
     *
     * @return string
     */
    public function getExtractedBirthName(): string
    {
        return $this->extractedBirthName;
    }
    /**
     * Extracted birth name on the document
     *
     * @param string $extractedBirthName
     *
     * @return self
     */
    public function setExtractedBirthName(string $extractedBirthName): self
    {
        $this->extractedBirthName = $extractedBirthName;
        return $this;
    }
    /**
     * Extracted birth date on the document
     *
     * @return \DateTime
     */
    public function getExtractedBirthDate(): \DateTime
    {
        return $this->extractedBirthDate;
    }
    /**
     * Extracted birth date on the document
     *
     * @param \DateTime $extractedBirthDate
     *
     * @return self
     */
    public function setExtractedBirthDate(\DateTime $extractedBirthDate): self
    {
        $this->extractedBirthDate = $extractedBirthDate;
        return $this;
    }
    /**
     * Extracted gender on the document
     *
     * @return string
     */
    public function getExtractedGender(): string
    {
        return $this->extractedGender;
    }
    /**
     * Extracted gender on the document
     *
     * @param string $extractedGender
     *
     * @return self
     */
    public function setExtractedGender(string $extractedGender): self
    {
        $this->extractedGender = $extractedGender;
        return $this;
    }
    /**
     * Extracted issuance date on the document
     *
     * @return \DateTime
     */
    public function getExtractedIssuanceDate(): \DateTime
    {
        return $this->extractedIssuanceDate;
    }
    /**
     * Extracted issuance date on the document
     *
     * @param \DateTime $extractedIssuanceDate
     *
     * @return self
     */
    public function setExtractedIssuanceDate(\DateTime $extractedIssuanceDate): self
    {
        $this->extractedIssuanceDate = $extractedIssuanceDate;
        return $this;
    }
    /**
     * Extracted expiration date on the document
     *
     * @return \DateTime
     */
    public function getExtractedExpirationDate(): \DateTime
    {
        return $this->extractedExpirationDate;
    }
    /**
     * Extracted expiration date on the document
     *
     * @param \DateTime $extractedExpirationDate
     *
     * @return self
     */
    public function setExtractedExpirationDate(\DateTime $extractedExpirationDate): self
    {
        $this->extractedExpirationDate = $extractedExpirationDate;
        return $this;
    }
    /**
     * Extracted MRZ on the document
     *
     * @return string[]
     */
    public function getExtractedMrz(): array
    {
        return $this->extractedMrz;
    }
    /**
     * Extracted MRZ on the document
     *
     * @param string[] $extractedMrz
     *
     * @return self
     */
    public function setExtractedMrz(array $extractedMrz): self
    {
        $this->extractedMrz = $extractedMrz;
        return $this;
    }
    /**
     * Defines if one firstname sent in the input is valid
     *
     * @return bool
     */
    public function getFirstNameValid(): bool
    {
        return $this->firstNameValid;
    }
    /**
     * Defines if one firstname sent in the input is valid
     *
     * @param bool $firstNameValid
     *
     * @return self
     */
    public function setFirstNameValid(bool $firstNameValid): self
    {
        $this->firstNameValid = $firstNameValid;
        return $this;
    }
    /**
     * Defines if birth name sent in the input is valid
     *
     * @return bool
     */
    public function getBirthNameValid(): bool
    {
        return $this->birthNameValid;
    }
    /**
     * Defines if birth name sent in the input is valid
     *
     * @param bool $birthNameValid
     *
     * @return self
     */
    public function setBirthNameValid(bool $birthNameValid): self
    {
        $this->birthNameValid = $birthNameValid;
        return $this;
    }
    /**
     * Defines if MRZ sent in the input is valid
     *
     * @return bool
     */
    public function getMrzValid(): bool
    {
        return $this->mrzValid;
    }
    /**
     * Defines if MRZ sent in the input is valid
     *
     * @param bool $mrzValid
     *
     * @return self
     */
    public function setMrzValid(bool $mrzValid): self
    {
        $this->mrzValid = $mrzValid;
        return $this;
    }
    /**
     * Defines if the document is expired
     *
     * @return bool
     */
    public function getExpired(): bool
    {
        return $this->expired;
    }
    /**
     * Defines if the document is expired
     *
     * @param bool $expired
     *
     * @return self
     */
    public function setExpired(bool $expired): self
    {
        $this->expired = $expired;
        return $this;
    }
    /**
     * Defines if the document is valid
     *
     * @return bool
     */
    public function getValid(): bool
    {
        return $this->valid;
    }
    /**
     * Defines if the document is valid
     *
     * @param bool $valid
     *
     * @return self
     */
    public function setValid(bool $valid): self
    {
        $this->valid = $valid;
        return $this;
    }
}
