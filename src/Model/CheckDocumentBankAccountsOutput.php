<?php

namespace IIYousign\Model;

class CheckDocumentBankAccountsOutput
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
     * Firstname to check on document
     *
     * @var string
     */
    protected $firstName;
    /**
     * Birth name to check on document
     *
     * @var string
     */
    protected $birthName;
    /**
     * Lastname to check on document
     *
     * @var string
     */
    protected $lastName;
    /**
     * Iban to check on document
     *
     * @var string
     */
    protected $iban;
    /**
     * Company name to check on document
     *
     * @var string
     */
    protected $companyName;
    /**
     * Type of document
     *
     * @var string
     */
    protected $documentType;
    /**
     * Workspace creator of the object
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
     * Extracted iban on the document
     *
     * @var string
     */
    protected $extractedIban;
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
     * Defines if lastname sent in the input is valid
     *
     * @var bool
     */
    protected $lastNameValid;
    /**
     * Defines if company name sent in the input is valid
     *
     * @var bool
     */
    protected $companyNameValid;
    /**
     * Defines if iban sent in the input is valid
     *
     * @var bool
     */
    protected $ibanValid;
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
     * Firstname to check on document
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * Firstname to check on document
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
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
     * Lastname to check on document
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Lastname to check on document
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Iban to check on document
     *
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }
    /**
     * Iban to check on document
     *
     * @param string $iban
     *
     * @return self
     */
    public function setIban(string $iban): self
    {
        $this->iban = $iban;
        return $this;
    }
    /**
     * Company name to check on document
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Company name to check on document
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;
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
     * Workspace creator of the object
     *
     * @return string
     */
    public function getWorkspace(): string
    {
        return $this->workspace;
    }
    /**
     * Workspace creator of the object
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
     * Extracted iban on the document
     *
     * @return string
     */
    public function getExtractedIban(): string
    {
        return $this->extractedIban;
    }
    /**
     * Extracted iban on the document
     *
     * @param string $extractedIban
     *
     * @return self
     */
    public function setExtractedIban(string $extractedIban): self
    {
        $this->extractedIban = $extractedIban;
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
     * Defines if lastname sent in the input is valid
     *
     * @return bool
     */
    public function getLastNameValid(): bool
    {
        return $this->lastNameValid;
    }
    /**
     * Defines if lastname sent in the input is valid
     *
     * @param bool $lastNameValid
     *
     * @return self
     */
    public function setLastNameValid(bool $lastNameValid): self
    {
        $this->lastNameValid = $lastNameValid;
        return $this;
    }
    /**
     * Defines if company name sent in the input is valid
     *
     * @return bool
     */
    public function getCompanyNameValid(): bool
    {
        return $this->companyNameValid;
    }
    /**
     * Defines if company name sent in the input is valid
     *
     * @param bool $companyNameValid
     *
     * @return self
     */
    public function setCompanyNameValid(bool $companyNameValid): self
    {
        $this->companyNameValid = $companyNameValid;
        return $this;
    }
    /**
     * Defines if iban sent in the input is valid
     *
     * @return bool
     */
    public function getIbanValid(): bool
    {
        return $this->ibanValid;
    }
    /**
     * Defines if iban sent in the input is valid
     *
     * @param bool $ibanValid
     *
     * @return self
     */
    public function setIbanValid(bool $ibanValid): self
    {
        $this->ibanValid = $ibanValid;
        return $this;
    }
}
