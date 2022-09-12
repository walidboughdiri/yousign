<?php

namespace IIYousign\Model;

class Violation
{
    /**
     *
     *
     * @var string|null
     */
    protected $propertyPath;
    /**
     *
     *
     * @var string|null
     */
    protected $message;
    /**
     *
     *
     * @return string|null
     */
    public function getPropertyPath(): ?string
    {
        return $this->propertyPath;
    }
    /**
     *
     *
     * @param string|null $propertyPath
     *
     * @return self
     */
    public function setPropertyPath(?string $propertyPath): self
    {
        $this->propertyPath = $propertyPath;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     *
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }
}
