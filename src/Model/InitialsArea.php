<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Model;

class InitialsArea
{
    /**
     * Initials alignment on the document.
     *
     * @var string
     */
    protected $alignment;
    /**
     * y-axis position on the document.
     *
     * @var int
     */
    protected $y;

    /**
     * Initials alignment on the document.
     */
    public function getAlignment(): string
    {
        return $this->alignment;
    }

    /**
     * Initials alignment on the document.
     */
    public function setAlignment(string $alignment): self
    {
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * y-axis position on the document.
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * y-axis position on the document.
     */
    public function setY(int $y): self
    {
        $this->y = $y;

        return $this;
    }
}