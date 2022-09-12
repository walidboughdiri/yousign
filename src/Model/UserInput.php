<?php

namespace IIYousign\Model;

class UserInput
{
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
     * User's email address (This field is allowed only during creation)
     *
     * @var string
     */
    protected $email;
    /**
     * User's job title
     *
     * @var string|null
     */
    protected $title;
    /**
     * User's phone number (mobiles and landline telephones are supported). Phone number must be formatted to E164 (https://en.wikipedia.org/wiki/E.164) which includes the symbol '+' and the country code. For example : +33612131315. All countries are supported.
     *
     * @var string
     */
    protected $phone;
    /**
     *
     *
     * @var string|null
     */
    protected $permission;
    /**
     * User's UserGroup
     *
     * @var string|null
     */
    protected $group;
    /**
     *
     *
     * @var UserInputConfig|null
     */
    protected $config;
    /**
     * ID of file image
     *
     * @var string|null
     */
    protected $defaultSignImage;
    /**
     * Defines if the notifications are enable ou disable for entities
     *
     * @var UserInputNotifications|null
     */
    protected $notifications;
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
     * User's email address (This field is allowed only during creation)
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * User's email address (This field is allowed only during creation)
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
     * User's job title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * User's job title
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
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * User's phone number (mobiles and landline telephones are supported). Phone number must be formatted to E164 (https://en.wikipedia.org/wiki/E.164) which includes the symbol '+' and the country code. For example : +33612131315. All countries are supported.
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
     * User's UserGroup
     *
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }
    /**
     * User's UserGroup
     *
     * @param string|null $group
     *
     * @return self
     */
    public function setGroup(?string $group): self
    {
        $this->group = $group;
        return $this;
    }
    /**
     *
     *
     * @return UserInputConfig|null
     */
    public function getConfig(): ?UserInputConfig
    {
        return $this->config;
    }
    /**
     *
     *
     * @param UserInputConfig|null $config
     *
     * @return self
     */
    public function setConfig(?UserInputConfig $config): self
    {
        $this->config = $config;
        return $this;
    }
    /**
     * ID of file image
     *
     * @return string|null
     */
    public function getDefaultSignImage(): ?string
    {
        return $this->defaultSignImage;
    }
    /**
     * ID of file image
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
     * @return UserInputNotifications|null
     */
    public function getNotifications(): ?UserInputNotifications
    {
        return $this->notifications;
    }
    /**
     * Defines if the notifications are enable ou disable for entities
     *
     * @param UserInputNotifications|null $notifications
     *
     * @return self
     */
    public function setNotifications(?UserInputNotifications $notifications): self
    {
        $this->notifications = $notifications;
        return $this;
    }
}
