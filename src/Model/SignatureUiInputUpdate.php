<?php

namespace IIYousign\Model;

class SignatureUiInputUpdate
{
    /**
     * Resource's name
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
     * True for use a popup for enter the SMS code, false for use a fullscreen view.
     *
     * @var bool|null
     */
    protected $authenticationPopup = false;
    /**
     * Default zoom of the pdf viewer. Default is the adapted to the resolution of your screen.
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
     * Allow sign images types available for signature.
     *
     * @var string[]|null
     */
    protected $signImageTypesAvailable;
    /**
     * Default language of the view. Must be in "languages" field.
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
     * List of fonts to load on the view. (Loaded via google fonts)
     *
     * @var string[]|null
     */
    protected $fonts;
    /**
     * CSS for customize the view
     *
     * @var string|null
     */
    protected $style;
    /**
     * Redirection when a procedure is refused
     *
     * @var SignatureUiInputUpdateRedirectCancel
     */
    protected $redirectCancel;
    /**
     * Redirect when the member get an error of the signature of the procedure
     *
     * @var SignatureUiInputUpdateRedirectError
     */
    protected $redirectError;
    /**
     * Redirect when the member have successfully signed the procedure
     *
     * @var SignatureUiInputUpdateRedirectSuccess
     */
    protected $redirectSuccess;
    /**
     * Resource's name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Resource's name
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
     * True for use a popup for enter the SMS code, false for use a fullscreen view.
     *
     * @return bool|null
     */
    public function getAuthenticationPopup(): ?bool
    {
        return $this->authenticationPopup;
    }
    /**
     * True for use a popup for enter the SMS code, false for use a fullscreen view.
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
     * Default zoom of the pdf viewer. Default is the adapted to the resolution of your screen.
     *
     * @return float|null
     */
    public function getDefaultZoom(): ?float
    {
        return $this->defaultZoom;
    }
    /**
     * Default zoom of the pdf viewer. Default is the adapted to the resolution of your screen.
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
     * Allow sign images types available for signature.
     *
     * @return string[]|null
     */
    public function getSignImageTypesAvailable(): ?array
    {
        return $this->signImageTypesAvailable;
    }
    /**
     * Allow sign images types available for signature.
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
     * Default language of the view. Must be in "languages" field.
     *
     * @return string|null
     */
    public function getDefaultLanguage(): ?string
    {
        return $this->defaultLanguage;
    }
    /**
     * Default language of the view. Must be in "languages" field.
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
     * List of fonts to load on the view. (Loaded via google fonts)
     *
     * @return string[]|null
     */
    public function getFonts(): ?array
    {
        return $this->fonts;
    }
    /**
     * List of fonts to load on the view. (Loaded via google fonts)
     *
     * @param string[]|null $fonts
     *
     * @return self
     */
    public function setFonts(?array $fonts): self
    {
        $this->fonts = $fonts;
        return $this;
    }
    /**
     * CSS for customize the view
     *
     * @return string|null
     */
    public function getStyle(): ?string
    {
        return $this->style;
    }
    /**
     * CSS for customize the view
     *
     * @param string|null $style
     *
     * @return self
     */
    public function setStyle(?string $style): self
    {
        $this->style = $style;
        return $this;
    }
    /**
     * Redirection when a procedure is refused
     *
     * @return SignatureUiInputUpdateRedirectCancel
     */
    public function getRedirectCancel(): SignatureUiInputUpdateRedirectCancel
    {
        return $this->redirectCancel;
    }
    /**
     * Redirection when a procedure is refused
     *
     * @param SignatureUiInputUpdateRedirectCancel $redirectCancel
     *
     * @return self
     */
    public function setRedirectCancel(SignatureUiInputUpdateRedirectCancel $redirectCancel): self
    {
        $this->redirectCancel = $redirectCancel;
        return $this;
    }
    /**
     * Redirect when the member get an error of the signature of the procedure
     *
     * @return SignatureUiInputUpdateRedirectError
     */
    public function getRedirectError(): SignatureUiInputUpdateRedirectError
    {
        return $this->redirectError;
    }
    /**
     * Redirect when the member get an error of the signature of the procedure
     *
     * @param SignatureUiInputUpdateRedirectError $redirectError
     *
     * @return self
     */
    public function setRedirectError(SignatureUiInputUpdateRedirectError $redirectError): self
    {
        $this->redirectError = $redirectError;
        return $this;
    }
    /**
     * Redirect when the member have successfully signed the procedure
     *
     * @return SignatureUiInputUpdateRedirectSuccess
     */
    public function getRedirectSuccess(): SignatureUiInputUpdateRedirectSuccess
    {
        return $this->redirectSuccess;
    }
    /**
     * Redirect when the member have successfully signed the procedure
     *
     * @param SignatureUiInputUpdateRedirectSuccess $redirectSuccess
     *
     * @return self
     */
    public function setRedirectSuccess(SignatureUiInputUpdateRedirectSuccess $redirectSuccess): self
    {
        $this->redirectSuccess = $redirectSuccess;
        return $this;
    }
}
