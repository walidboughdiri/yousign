<?php

namespace IIYousign\Model;

class SignatureUiLabelInput
{
    /**
     * Name of the label. If the name is not used in the view, nothing will appear.
     *
     * @var string
     */
    protected $name;
    /**
     * Translation of the label per language
     *
     * @var SignatureUiLabelInputLanguages
     */
    protected $languages;
    /**
     * Associated Signature UI's ID
     *
     * @var string
     */
    protected $signatureUi;
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
     * @return SignatureUiLabelInputLanguages
     */
    public function getLanguages(): SignatureUiLabelInputLanguages
    {
        return $this->languages;
    }
    /**
     * Translation of the label per language
     *
     * @param SignatureUiLabelInputLanguages $languages
     *
     * @return self
     */
    public function setLanguages(SignatureUiLabelInputLanguages $languages): self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * Associated Signature UI's ID
     *
     * @return string
     */
    public function getSignatureUi(): string
    {
        return $this->signatureUi;
    }
    /**
     * Associated Signature UI's ID
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
}
