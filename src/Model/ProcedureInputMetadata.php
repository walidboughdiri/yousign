<?php

namespace IIYousign\Model;

class ProcedureInputMetadata
{
    /**
     *
     *
     * @var string|null
     */
    protected $key1;
    /**
     *
     *
     * @var int|null
     */
    protected $key2;
    /**
     *
     *
     * @return string|null
     */
    public function getKey1(): ?string
    {
        return $this->key1;
    }
    /**
     *
     *
     * @param string|null $key1
     *
     * @return self
     */
    public function setKey1(?string $key1): self
    {
        $this->key1 = $key1;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getKey2(): ?int
    {
        return $this->key2;
    }
    /**
     *
     *
     * @param int|null $key2
     *
     * @return self
     */
    public function setKey2(?int $key2): self
    {
        $this->key2 = $key2;
        return $this;
    }
}
