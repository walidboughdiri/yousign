<?php

namespace IIYousign\Model;

class MemberOutput
{
    /**
     * Id of the object
     *
     * @var string|null
     */
    protected $id;
    /**
     * Internal user associated with the member. In this case, informations about the member will be informations of the user (first name, last name, phone number and email).
     *
     * @var string|null
     */
    protected $user;
    /**
     * Type of a member. "signer" to sign documents (legally) and "validator" to validate documents.
     *
     * @var string|null
     */
    protected $type = 'signer';
    /**
     * Firstname of an external member.
     *
     * @var string
     */
    protected $firstname;
    /**
     * Lastname of an external member.
     *
     * @var string
     */
    protected $lastname;
    /**
     * Email of an external member.
     *
     * @var string
     */
    protected $email;
    /**
     * Phone of an external member.
     *
     * @var string
     */
    protected $phone;
    /**
     * Position of the member if ordered is set to true. Example with two members, the first one could have a position set to 1, the second one set to 2. In this case, when the procedure starts, only the first member will be notified and could validate the documents. The second one could not validate the documents, he will be notified when the first signer is notified.
     *
     * @var int|null
     */
    protected $position;
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
    protected $status;
    /**
     *
     *
     * @var mixed[]|null
     */
    protected $fileObjects;
    /**
     * Comment of a member when he refuses a signature
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Procedure id reference
     *
     * @var string|null
     */
    protected $procedure;
    /**
     *
     *
     * @var string|null
     */
    protected $operationLevel;
    /**
     *
     *
     * @var string[]|null
     */
    protected $operationCustomModes;
    /**
     *
     *
     * @var mixed
     */
    protected $operationModeSmsConfig;
    /**
     * Id of the object
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Id of the object
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Internal user associated with the member. In this case, informations about the member will be informations of the user (first name, last name, phone number and email).
     *
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * Internal user associated with the member. In this case, informations about the member will be informations of the user (first name, last name, phone number and email).
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Type of a member. "signer" to sign documents (legally) and "validator" to validate documents.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Type of a member. "signer" to sign documents (legally) and "validator" to validate documents.
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
     * Firstname of an external member.
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    /**
     * Firstname of an external member.
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * Lastname of an external member.
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }
    /**
     * Lastname of an external member.
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * Email of an external member.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email of an external member.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Phone of an external member.
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * Phone of an external member.
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * Position of the member if ordered is set to true. Example with two members, the first one could have a position set to 1, the second one set to 2. In this case, when the procedure starts, only the first member will be notified and could validate the documents. The second one could not validate the documents, he will be notified when the first signer is notified.
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Position of the member if ordered is set to true. Example with two members, the first one could have a position set to 1, the second one set to 2. In this case, when the procedure starts, only the first member will be notified and could validate the documents. The second one could not validate the documents, he will be notified when the first signer is notified.
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
     *
     *
     * @return mixed[]|null
     */
    public function getFileObjects(): ?array
    {
        return $this->fileObjects;
    }
    /**
     *
     *
     * @param mixed[]|null $fileObjects
     *
     * @return self
     */
    public function setFileObjects(?array $fileObjects): self
    {
        $this->fileObjects = $fileObjects;
        return $this;
    }
    /**
     * Comment of a member when he refuses a signature
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Comment of a member when he refuses a signature
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Procedure id reference
     *
     * @return string|null
     */
    public function getProcedure(): ?string
    {
        return $this->procedure;
    }
    /**
     * Procedure id reference
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
     * @return string|null
     */
    public function getOperationLevel(): ?string
    {
        return $this->operationLevel;
    }
    /**
     *
     *
     * @param string|null $operationLevel
     *
     * @return self
     */
    public function setOperationLevel(?string $operationLevel): self
    {
        $this->operationLevel = $operationLevel;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getOperationCustomModes(): ?array
    {
        return $this->operationCustomModes;
    }
    /**
     *
     *
     * @param string[]|null $operationCustomModes
     *
     * @return self
     */
    public function setOperationCustomModes(?array $operationCustomModes): self
    {
        $this->operationCustomModes = $operationCustomModes;
        return $this;
    }
    /**
     *
     *
     * @return mixed
     */
    public function getOperationModeSmsConfig()
    {
        return $this->operationModeSmsConfig;
    }
    /**
     *
     *
     * @param mixed $operationModeSmsConfig
     *
     * @return self
     */
    public function setOperationModeSmsConfig($operationModeSmsConfig): self
    {
        $this->operationModeSmsConfig = $operationModeSmsConfig;
        return $this;
    }
}
