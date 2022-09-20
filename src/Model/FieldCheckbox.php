<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Model;

class FieldCheckbox
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $documentId;
    /**
     * @var string|null
     */
    protected $type = 'checkbox';
    /**
     * Checkbox name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Signer has checked the checkbox.
     *
     * @var bool|null
     */
    protected $checked = true;
    /**
     * @var float|null
     */
    protected $page = 1;
    /**
     * @var bool|null
     */
    protected $optional = false;
    /**
     * @var float
     */
    protected $x;
    /**
     * @var float
     */
    protected $y;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getDocumentId(): ?string
    {
        return $this->documentId;
    }

    public function setDocumentId(?string $documentId): self
    {
        $this->documentId = $documentId;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Checkbox name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Checkbox name.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Signer has checked the checkbox.
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }

    /**
     * Signer has checked the checkbox.
     */
    public function setChecked(?bool $checked): self
    {
        $this->checked = $checked;

        return $this;
    }

    public function getPage(): ?float
    {
        return $this->page;
    }

    public function setPage(?float $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getOptional(): ?bool
    {
        return $this->optional;
    }

    public function setOptional(?bool $optional): self
    {
        $this->optional = $optional;

        return $this;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function setX(float $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setY(float $y): self
    {
        $this->y = $y;

        return $this;
    }
}