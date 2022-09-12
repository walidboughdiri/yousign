<?php

namespace IIYousign\Model;

class UserOutput
{
    /**
     * Object's ID
     *
     * @var string
     */
    protected $id;
    /**
     * User's firstname
     *
     * @var string
     */
    protected $firstname;
    /**
     * User's lastname
     *
     * @var string
     */
    protected $lastname;
    /**
     * User's email address
     *
     * @var string
     */
    protected $email;
    /**
     * User's title
     *
     * @var string|null
     */
    protected $title;
    /**
     * User's phone number (mobiles and landline telephones are supported). Phone number must be formatted to E164 (https://en.wikipedia.org/wiki/E.164) which includes the symbol '+' and the country code. For example : +33612131315. All countries are supported.
     *
     * @var string|null
     */
    protected $phone;
    /**
     * User's status
     *
     * @var string|null
     */
    protected $status;
    /**
     * ID of the organization the user belongs to
     *
     * @var string|null
     */
    protected $organization;
    /**
     * List of workspaces to which the user is connected and has access
     *
     * @var UserWorkspaceOutput[]|null
     */
    protected $workspaces;
    /**
     *
     *
     * @var string|null
     */
    protected $permission;
    /**
     *
     *
     * @var UserGroup
     */
    protected $group;
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
     * Defines if the User is deleted or not
     *
     * @var bool
     */
    protected $deleted;
    /**
     *
     *
     * @var UserOutputConfig|null
     */
    protected $config;
    /**
     * Internal usage, should not be used
     *
     * @var string|null
     */
    protected $inweboUserRequest;
    /**
     * ID of SAML
     *
     * @var string|null
     */
    protected $samlNameId;
    /**
     * ID of the default sign image.
     *
     * @var string|null
     */
    protected $defaultSignImage;
    /**
     * Defines if the notifications are enable ou disable for entities
     *
     * @var UserOutputNotifications|null
     */
    protected $notifications;
    /**
     * Defines if the fast signature is available for the user on the Yousign application
     *
     * @var bool
     */
    protected $fastSign;
    /**
     * User's full name
     *
     * @var string
     */
    protected $fullName;
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
     * User's firstname
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    /**
     * User's firstname
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
     * User's lastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }
    /**
     * User's lastname
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
     * User's email address
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * User's email address
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
     * User's title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * User's title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * User's phone number (mobiles and landline telephones are supported). Phone number must be formatted to E164 (https://en.wikipedia.org/wiki/E.164) which includes the symbol '+' and the country code. For example : +33612131315. All countries are supported.
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * User's phone number (mobiles and landline telephones are supported). Phone number must be formatted to E164 (https://en.wikipedia.org/wiki/E.164) which includes the symbol '+' and the country code. For example : +33612131315. All countries are supported.
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * User's status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * User's status
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * ID of the organization the user belongs to
     *
     * @return string|null
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }
    /**
     * ID of the organization the user belongs to
     *
     * @param string|null $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;
        return $this;
    }
    /**
     * List of workspaces to which the user is connected and has access
     *
     * @return UserWorkspaceOutput[]|null
     */
    public function getWorkspaces(): ?array
    {
        return $this->workspaces;
    }
    /**
     * List of workspaces to which the user is connected and has access
     *
     * @param UserWorkspaceOutput[]|null $workspaces
     *
     * @return self
     */
    public function setWorkspaces(?array $workspaces): self
    {
        $this->workspaces = $workspaces;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPermission(): ?string
    {
        return $this->permission;
    }
    /**
     *
     *
     * @param string|null $permission
     *
     * @return self
     */
    public function setPermission(?string $permission): self
    {
        $this->permission = $permission;
        return $this;
    }
    /**
     *
     *
     * @return UserGroup
     */
    public function getGroup(): UserGroup
    {
        return $this->group;
    }
    /**
     *
     *
     * @param UserGroup $group
     *
     * @return self
     */
    public function setGroup(UserGroup $group): self
    {
        $this->group = $group;
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
     * Defines if the User is deleted or not
     *
     * @return bool
     */
    public function getDeleted(): bool
    {
        return $this->deleted;
    }
    /**
     * Defines if the User is deleted or not
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }
    /**
     *
     *
     * @return UserOutputConfig|null
     */
    public function getConfig(): ?UserOutputConfig
    {
        return $this->config;
    }
    /**
     *
     *
     * @param UserOutputConfig|null $config
     *
     * @return self
     */
    public function setConfig(?UserOutputConfig $config): self
    {
        $this->config = $config;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return string|null
     */
    public function getInweboUserRequest(): ?string
    {
        return $this->inweboUserRequest;
    }
    /**
     * Internal usage, should not be used
     *
     * @param string|null $inweboUserRequest
     *
     * @return self
     */
    public function setInweboUserRequest(?string $inweboUserRequest): self
    {
        $this->inweboUserRequest = $inweboUserRequest;
        return $this;
    }
    /**
     * ID of SAML
     *
     * @return string|null
     */
    public function getSamlNameId(): ?string
    {
        return $this->samlNameId;
    }
    /**
     * ID of SAML
     *
     * @param string|null $samlNameId
     *
     * @return self
     */
    public function setSamlNameId(?string $samlNameId): self
    {
        $this->samlNameId = $samlNameId;
        return $this;
    }
    /**
     * ID of the default sign image.
     *
     * @return string|null
     */
    public function getDefaultSignImage(): ?string
    {
        return $this->defaultSignImage;
    }
    /**
     * ID of the default sign image.
     *
     * @param string|null $defaultSignImage
     *
     * @return self
     */
    public function setDefaultSignImage(?string $defaultSignImage): self
    {
        $this->defaultSignImage = $defaultSignImage;
        return $this;
    }
    /**
     * Defines if the notifications are enable ou disable for entities
     *
     * @return UserOutputNotifications|null
     */
    public function getNotifications(): ?UserOutputNotifications
    {
        return $this->notifications;
    }
    /**
     * Defines if the notifications are enable ou disable for entities
     *
     * @param UserOutputNotifications|null $notifications
     *
     * @return self
     */
    public function setNotifications(?UserOutputNotifications $notifications): self
    {
        $this->notifications = $notifications;
        return $this;
    }
    /**
     * Defines if the fast signature is available for the user on the Yousign application
     *
     * @return bool
     */
    public function getFastSign(): bool
    {
        return $this->fastSign;
    }
    /**
     * Defines if the fast signature is available for the user on the Yousign application
     *
     * @param bool $fastSign
     *
     * @return self
     */
    public function setFastSign(bool $fastSign): self
    {
        $this->fastSign = $fastSign;
        return $this;
    }
    /**
     * User's full name
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }
    /**
     * User's full name
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;
        return $this;
    }
}
