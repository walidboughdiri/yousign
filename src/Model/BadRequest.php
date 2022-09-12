<?php

namespace IIYousign\Model;

class BadRequest
{
    /**
     *
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @var string|null
     */
    protected $title;
    /**
     *
     *
     * @var string|null
     */
    protected $detail;
    /**
     *
     *
     * @var Violation[]|null
     */
    protected $violations;
    /**
     *
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     *
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
     *
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     *
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
     *
     *
     * @return string|null
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }
    /**
     *
     *
     * @param string|null $detail
     *
     * @return self
     */
    public function setDetail(?string $detail): self
    {
        $this->detail = $detail;
        return $this;
    }
    /**
     *
     *
     * @return Violation[]|null
     */
    public function getViolations(): ?array
    {
        return $this->violations;
    }
    /**
     *
     *
     * @param Violation[]|null $violations
     *
     * @return self
     */
    public function setViolations(?array $violations): self
    {
        $this->violations = $violations;
        return $this;
    }
}
