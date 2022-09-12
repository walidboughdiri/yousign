<?php

namespace IIYousign\Model;

class UserGroup
{
    /**
     * Id of the object
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the UserGroup
     *
     * @var string
     */
    protected $name;
    /**
     * Permissions of UserGroup
     *
     * @var string[]|null
     */
    protected $permissions;
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
     * Name of the UserGroup
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the UserGroup
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
     * Permissions of UserGroup
     *
     * @return string[]|null
     */
    public function getPermissions(): ?array
    {
        return $this->permissions;
    }
    /**
     * Permissions of UserGroup
     *
     * @param string[]|null $permissions
     *
     * @return self
     */
    public function setPermissions(?array $permissions): self
    {
        $this->permissions = $permissions;
        return $this;
    }
}
