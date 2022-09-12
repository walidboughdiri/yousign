<?php

namespace IIYousign\Model;

class SignatureUiLabelOutput
{
    /**
     * Resource's ID
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the label. If the name is not used in the view, nothing will appear.
     *
     * @var string
     */
    protected $name;
    /**
     * Translation of the label per language
     *
     * @var SignatureUiLabelOutputLanguages
     */
    protected $languages;
    /**
     * Associated signature UI's ID
     *
     * @var string
     */
    protected $signatureUi;
    /**
     * Creator's ID
     *
     * @var string
     */
    protected $creator;
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
     * Resource's ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Resource's ID
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
     * Name of the label. If the name is not used in the view, nothing will appear.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the label. If the name is not used in the view, nothing will appear.
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
     * Translation of the label per language
     *
     * @return SignatureUiLabelOutputLanguages
     */
    public function getLanguages(): SignatureUiLabelOutputLanguages
    {
        return $this->languages;
    }
    /**
     * Translation of the label per language
     *
     * @param SignatureUiLabelOutputLanguages $languages
     *
     * @return self
     */
    public function setLanguages(SignatureUiLabelOutputLanguages $languages): self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * Associated signature UI's ID
     *
     * @return string
     */
    public function getSignatureUi(): string
    {
        return $this->signatureUi;
    }
    /**
     * Associated signature UI's ID
     *
     * @param string $signatureUi
     *
     * @return self
     */
    public function setSignatureUi(string $signatureUi): self
    {
        $this->signatureUi = $signatureUi;
        return $this;
    }
    /**
     * Creator's ID
     *
     * @return string
     */
    public function getCreator(): string
    {
        return $this->creator;
    }
    /**
     * Creator's ID
     *
     * @param string $creator
     *
     * @return self
     */
    public function setCreator(string $creator): self
    {
        $this->creator = $creator;
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
}
