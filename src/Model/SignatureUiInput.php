<?php

namespace IIYousign\Model;

class SignatureUiInput
{
    /**
     * Signature UI's name
     *
     * @var string
     */
    protected $name;
    /**
     * Signature UI's description
     *
     * @var string|null
     */
    protected $description;
    /**
     * Toggle header bar of the app view
     *
     * @var bool|null
     */
    protected $enableHeaderBar = true;
    /**
     * Toggle "Sign as" band on the top of the app view
     *
     * @var bool|null
     */
    protected $enableHeaderBarSignAs = true;
    /**
     * Toggle sidebar of the app view
     *
     * @var bool|null
     */
    protected $enableSidebar = true;
    /**
     * Toggle list of members in the procedure
     *
     * @var bool|null
     */
    protected $enableMemberList = true;
    /**
     * Toggle list of documents in the procedure
     *
     * @var bool|null
     */
    protected $enableDocumentList = true;
    /**
     * Toggle downloads buttons for documents
     *
     * @var bool|null
     */
    protected $enableDocumentDownload = true;
    /**
     * Toggle activity feed
     *
     * @var bool|null
     */
    protected $enableActivities = true;
    /**
     * True for use a popup to enter the SMS code, false for use a fullscreen view.
     *
     * @var bool|null
     */
    protected $authenticationPopup = false;
    /**
     * Default value for zoom of the PDF viewer. Default value is the adapted to the resolution of your screen.
     *
     * @var float|null
     */
    protected $defaultZoom;
    /**
     * Base64 of your logo
     *
     * @var string|null
     */
    protected $logo;
    /**
     * Allow sign images types available for signature. The first type of the list will be selected as default for the signer.
     *
     * @var string[]|null
     */
    protected $signImageTypesAvailable;
    /**
     * Default selected language of the interface. Must be present in "languages" field.
     *
     * @var string|null
     */
    protected $defaultLanguage;
    /**
     * Array of allowed languages, use country code
     *
     * @var string[]|null
     */
    protected $languages;
    /**
     *
     *
     * @var SignatureUiLabelInputIncluded[]
     */
    protected $labels;
    /**
     * List of fonts to load on the view. (Loaded via Google fonts)
     *
     * @var string[]
     */
    protected $fonts;
    /**
     * CSS for customize the view
     *
     * @var string
     */
    protected $style;
    /**
     * Redirection when a Procedure is refused
     *
     * @var SignatureUiInputRedirectCancel
     */
    protected $redirectCancel;
    /**
     * Redirect when the Member gets an error on the procedure of the signature
     *
     * @var SignatureUiInputRedirectError
     */
    protected $redirectError;
    /**
     * Redirect when the Member has successfully signed the procedure
     *
     * @var SignatureUiInputRedirectSuccess
     */
    protected $redirectSuccess;
    /**
     * Signature UI's name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Signature UI's name
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
     * Signature UI's description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Signature UI's description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Toggle header bar of the app view
     *
     * @return bool|null
     */
    public function getEnableHeaderBar(): ?bool
    {
        return $this->enableHeaderBar;
    }
    /**
     * Toggle header bar of the app view
     *
     * @param bool|null $enableHeaderBar
     *
     * @return self
     */
    public function setEnableHeaderBar(?bool $enableHeaderBar): self
    {
        $this->enableHeaderBar = $enableHeaderBar;
        return $this;
    }
    /**
     * Toggle "Sign as" band on the top of the app view
     *
     * @return bool|null
     */
    public function getEnableHeaderBarSignAs(): ?bool
    {
        return $this->enableHeaderBarSignAs;
    }
    /**
     * Toggle "Sign as" band on the top of the app view
     *
     * @param bool|null $enableHeaderBarSignAs
     *
     * @return self
     */
    public function setEnableHeaderBarSignAs(?bool $enableHeaderBarSignAs): self
    {
        $this->enableHeaderBarSignAs = $enableHeaderBarSignAs;
        return $this;
    }
    /**
     * Toggle sidebar of the app view
     *
     * @return bool|null
     */
    public function getEnableSidebar(): ?bool
    {
        return $this->enableSidebar;
    }
    /**
     * Toggle sidebar of the app view
     *
     * @param bool|null $enableSidebar
     *
     * @return self
     */
    public function setEnableSidebar(?bool $enableSidebar): self
    {
        $this->enableSidebar = $enableSidebar;
        return $this;
    }
    /**
     * Toggle list of members in the procedure
     *
     * @return bool|null
     */
    public function getEnableMemberList(): ?bool
    {
        return $this->enableMemberList;
    }
    /**
     * Toggle list of members in the procedure
     *
     * @param bool|null $enableMemberList
     *
     * @return self
     */
    public function setEnableMemberList(?bool $enableMemberList): self
    {
        $this->enableMemberList = $enableMemberList;
        return $this;
    }
    /**
     * Toggle list of documents in the procedure
     *
     * @return bool|null
     */
    public function getEnableDocumentList(): ?bool
    {
        return $this->enableDocumentList;
    }
    /**
     * Toggle list of documents in the procedure
     *
     * @param bool|null $enableDocumentList
     *
     * @return self
     */
    public function setEnableDocumentList(?bool $enableDocumentList): self
    {
        $this->enableDocumentList = $enableDocumentList;
        return $this;
    }
    /**
     * Toggle downloads buttons for documents
     *
     * @return bool|null
     */
    public function getEnableDocumentDownload(): ?bool
    {
        return $this->enableDocumentDownload;
    }
    /**
     * Toggle downloads buttons for documents
     *
     * @param bool|null $enableDocumentDownload
     *
     * @return self
     */
    public function setEnableDocumentDownload(?bool $enableDocumentDownload): self
    {
        $this->enableDocumentDownload = $enableDocumentDownload;
        return $this;
    }
    /**
     * Toggle activity feed
     *
     * @return bool|null
     */
    public function getEnableActivities(): ?bool
    {
        return $this->enableActivities;
    }
    /**
     * Toggle activity feed
     *
     * @param bool|null $enableActivities
     *
     * @return self
     */
    public function setEnableActivities(?bool $enableActivities): self
    {
        $this->enableActivities = $enableActivities;
        return $this;
    }
    /**
     * True for use a popup to enter the SMS code, false for use a fullscreen view.
     *
     * @return bool|null
     */
    public function getAuthenticationPopup(): ?bool
    {
        return $this->authenticationPopup;
    }
    /**
     * True for use a popup to enter the SMS code, false for use a fullscreen view.
     *
     * @param bool|null $authenticationPopup
     *
     * @return self
     */
    public function setAuthenticationPopup(?bool $authenticationPopup): self
    {
        $this->authenticationPopup = $authenticationPopup;
        return $this;
    }
    /**
     * Default value for zoom of the PDF viewer. Default value is the adapted to the resolution of your screen.
     *
     * @return float|null
     */
    public function getDefaultZoom(): ?float
    {
        return $this->defaultZoom;
    }
    /**
     * Default value for zoom of the PDF viewer. Default value is the adapted to the resolution of your screen.
     *
     * @param float|null $defaultZoom
     *
     * @return self
     */
    public function setDefaultZoom(?float $defaultZoom): self
    {
        $this->defaultZoom = $defaultZoom;
        return $this;
    }
    /**
     * Base64 of your logo
     *
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }
    /**
     * Base64 of your logo
     *
     * @param string|null $logo
     *
     * @return self
     */
    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;
        return $this;
    }
    /**
     * Allow sign images types available for signature. The first type of the list will be selected as default for the signer.
     *
     * @return string[]|null
     */
    public function getSignImageTypesAvailable(): ?array
    {
        return $this->signImageTypesAvailable;
    }
    /**
     * Allow sign images types available for signature. The first type of the list will be selected as default for the signer.
     *
     * @param string[]|null $signImageTypesAvailable
     *
     * @return self
     */
    public function setSignImageTypesAvailable(?array $signImageTypesAvailable): self
    {
        $this->signImageTypesAvailable = $signImageTypesAvailable;
        return $this;
    }
    /**
     * Default selected language of the interface. Must be present in "languages" field.
     *
     * @return string|null
     */
    public function getDefaultLanguage(): ?string
    {
        return $this->defaultLanguage;
    }
    /**
     * Default selected language of the interface. Must be present in "languages" field.
     *
     * @param string|null $defaultLanguage
     *
     * @return self
     */
    public function setDefaultLanguage(?string $defaultLanguage): self
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }
    /**
     * Array of allowed languages, use country code
     *
     * @return string[]|null
     */
    public function getLanguages(): ?array
    {
        return $this->languages;
    }
    /**
     * Array of allowed languages, use country code
     *
     * @param string[]|null $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages): self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     *
     *
     * @return SignatureUiLabelInputIncluded[]
     */
    public function getLabels(): array
    {
        return $this->labels;
    }
    /**
     *
     *
     * @param SignatureUiLabelInputIncluded[] $labels
     *
     * @return self
     */
    public function setLabels(array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * List of fonts to load on the view. (Loaded via Google fonts)
     *
     * @return string[]
     */
    public function getFonts(): array
    {
        return $this->fonts;
    }
    /**
     * List of fonts to load on the view. (Loaded via Google fonts)
     *
     * @param string[] $fonts
     *
     * @return self
     */
    public function setFonts(array $fonts): self
    {
        $this->fonts = $fonts;
        return $this;
    }
    /**
     * CSS for customize the view
     *
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }
    /**
     * CSS for customize the view
     *
     * @param string $style
     *
     * @return self
     */
    public function setStyle(string $style): self
    {
        $this->style = $style;
        return $this;
    }
    /**
     * Redirection when a Procedure is refused
     *
     * @return SignatureUiInputRedirectCancel
     */
    public function getRedirectCancel(): SignatureUiInputRedirectCancel
    {
        return $this->redirectCancel;
    }
    /**
     * Redirection when a Procedure is refused
     *
     * @param SignatureUiInputRedirectCancel $redirectCancel
     *
     * @return self
     */
    public function setRedirectCancel(SignatureUiInputRedirectCancel $redirectCancel): self
    {
        $this->redirectCancel = $redirectCancel;
        return $this;
    }
    /**
     * Redirect when the Member gets an error on the procedure of the signature
     *
     * @return SignatureUiInputRedirectError
     */
    public function getRedirectError(): SignatureUiInputRedirectError
    {
        return $this->redirectError;
    }
    /**
     * Redirect when the Member gets an error on the procedure of the signature
     *
     * @param SignatureUiInputRedirectError $redirectError
     *
     * @return self
     */
    public function setRedirectError(SignatureUiInputRedirectError $redirectError): self
    {
        $this->redirectError = $redirectError;
        return $this;
    }
    /**
     * Redirect when the Member has successfully signed the procedure
     *
     * @return SignatureUiInputRedirectSuccess
     */
    public function getRedirectSuccess(): SignatureUiInputRedirectSuccess
    {
        return $this->redirectSuccess;
    }
    /**
     * Redirect when the Member has successfully signed the procedure
     *
     * @param SignatureUiInputRedirectSuccess $redirectSuccess
     *
     * @return self
     */
    public function setRedirectSuccess(SignatureUiInputRedirectSuccess $redirectSuccess): self
    {
        $this->redirectSuccess = $redirectSuccess;
        return $this;
    }
}
