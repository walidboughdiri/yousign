<?php

namespace IIYousign\Model;

class SignatureUiLabelInputIncluded
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
     * @var SignatureUiLabelInputIncludedLanguages
     */
    protected $languages;
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
     * @return SignatureUiLabelInputIncludedLanguages
     */
    public function getLanguages(): SignatureUiLabelInputIncludedLanguages
    {
        return $this->languages;
    }
    /**
     * Translation of the label per language
     *
     * @param SignatureUiLabelInputIncludedLanguages $languages
     *
     * @return self
     */
    public function setLanguages(SignatureUiLabelInputIncludedLanguages $languages): self
    {
        $this->languages = $languages;
        return $this;
    }
}
