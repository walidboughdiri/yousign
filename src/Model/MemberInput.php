<?php

namespace IIYousign\Model;

class MemberInput
{
    /**
    * ID of the user in your companies. Informations about the member will be duplicate (first name, last name, email and phone number).

    Required if none of fields above are specified.
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
     * Firstname of an external member. Required if user field is blank
     *
     * @var string
     */
    protected $firstname;
    /**
     * Lastname of an external member. Required if user field is blank
     *
     * @var string
     */
    protected $lastname;
    /**
     * Email of an external member. Required if user field is blank
     *
     * @var string
     */
    protected $email;
    /**
     * Phone of an external member. Required if user field is blank
     *
     * @var string
     */
    protected $phone;
    /**
    * If the procedure have the boolean "ordered" at true, you can define position of the order to invite your members to sign.
    Only the first member will be invited to sign.

    When the first member have signed, the second will be invited, etc...
    *
    * @var int|null
    */
    protected $position;
    /**
     *
     *
     * @var FileObjectInput[]|null
     */
    protected $fileObjects;
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
    protected $operationLevel = 'none';
    /**
     *
     *
     * @var string[]|null
     */
    protected $operationCustomModes = array(0 => 'email');
    /**
     *
     *
     * @var mixed
     */
    protected $operationModeSmsConfig;
    /**
    * ID of the user in your companies. Informations about the member will be duplicate (first name, last name, email and phone number).

    Required if none of fields above are specified.
    *
    * @return string|null
    */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
    * ID of the user in your companies. Informations about the member will be duplicate (first name, last name, email and phone number).

    Required if none of fields above are specified.
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
     * Firstname of an external member. Required if user field is blank
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    /**
     * Firstname of an external member. Required if user field is blank
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
     * Lastname of an external member. Required if user field is blank
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }
    /**
     * Lastname of an external member. Required if user field is blank
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
     * Email of an external member. Required if user field is blank
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email of an external member. Required if user field is blank
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
     * Phone of an external member. Required if user field is blank
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * Phone of an external member. Required if user field is blank
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
    * If the procedure have the boolean "ordered" at true, you can define position of the order to invite your members to sign.
    Only the first member will be invited to sign.

    When the first member have signed, the second will be invited, etc...
    *
    * @return int|null
    */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
    * If the procedure have the boolean "ordered" at true, you can define position of the order to invite your members to sign.
    Only the first member will be invited to sign.

    When the first member have signed, the second will be invited, etc...
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
     *
     *
     * @return FileObjectInput[]|null
     */
    public function getFileObjects(): ?array
    {
        return $this->fileObjects;
    }
    /**
     *
     *
     * @param FileObjectInput[]|null $fileObjects
     *
     * @return self
     */
    public function setFileObjects(?array $fileObjects): self
    {
        $this->fileObjects = $fileObjects;
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
