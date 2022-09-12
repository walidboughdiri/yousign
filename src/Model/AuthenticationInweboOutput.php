<?php

namespace IIYousign\Model;

class AuthenticationInweboOutput
{
    /**
     * id of authentication
     *
     * @var string
     */
    protected $id;
    /**
     * Status of authentication
     *
     * @var string
     */
    protected $status;
    /**
     * Type of authentication
     *
     * @var string
     */
    protected $type;
    /**
     * id of authentication
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * id of authentication
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
     * Status of authentication
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Status of authentication
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
     * Type of authentication
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of authentication
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
}
