<?php

namespace IIYousign\Model;

class UserWorkspaceOutput
{
    /**
     * Object's ID
     *
     * @var string
     */
    protected $id;
    /**
     * Workspace name
     *
     * @var string
     */
    protected $name;
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
     * Workspace name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Workspace name
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
}
