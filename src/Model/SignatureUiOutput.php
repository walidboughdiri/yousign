<?php

namespace IIYousign\Model;

class SignatureUiOutput
{
    /**
     * Resource's ID
     *
     * @var string
     */
    protected $id;
    /**
     * Resource's name
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var string
     */
    protected $description;
    /**
     * Toggle header bar of the app view
     *
     * @var bool
     */
    protected $enableHeaderBar = true;
    /**
     * Toggle "Sign as" band on the top of the app view
     *
     * @var bool
     */
    protected $enableHeaderBarSignAs = true;
    /**
     * Toggle sidebar of the app view
     *
     * @var bool
     */
    protected $enableSidebar = true;
    /**
     * Toggle list of members in the procedure
     *
     * @var bool
     */
    protected $enableMemberList = true;
    /**
     * Toggle list of documents in the procedure
     *
     * @var bool
     */
    protected $enableDocumentList = true;
    /**
     * Toggle downloads buttons for documents
     *
     * @var bool
     */
    protected $enableDocumentDownload = true;
    /**
     * Toggle activity feed
     *
     * @var bool
     */
    protected $enableActivities = true;
    /**
     * True for use a popup for enter the SMS code, false for use a fullscreen view.
     *
     * @var bool
     */
    protected $authenticationPopup = false;
    /**
     * Default value for zoom of the PDF viewer. Default value is the adapted to the resolution of your screen.
     *
     * @var float
     */
    protected $defaultZoom;
    /**
     * Base64 of your logo
     *
     * @var string
     */
    protected $logo;
    /**
     * Allow sign images types available for signature.
     *
     * @var string[]
     */
    protected $signImageTypesAvailable;
    /**
     * Default language of the view. Must be in "languages" field.
     *
     * @var string
     */
    protected $defaultLanguage;
    /**
     * Array of allowed languages, use country code
     *
     * @var string[]
     */
    protected $languages;
    /**
     *
     *
     * @var SignatureUiLabelOutput[]
     */
    protected $labels;
    /**
     * List of fonts to load on the view. (Loaded via google fonts)
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
     * Redirection when a procedure is refused
     *
     * @var SignatureUiOutputRedirectCancel
     */
    protected $redirectCancel;
    /**
     * Redirect when the member get an error of the signature of the procedure
     *
     * @var SignatureUiOutputRedirectError
     */
    protected $redirectError;
    /**
     * Redirect when the member have successfully signed the procedure
     *
     * @var SignatureUiOutputRedirectSuccess
     */
    protected $redirectSuccess;
    /**
     * Creator's ID
     *
     * @var string
     */
    protected $creator;
    /**
     * Associated Workspace's ID
     *
     * @var string
     */
    protected $workspace;
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
     *
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     *
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Toggle header bar of the app view
     *
     * @return bool
     */
    public function getEnableHeaderBar(): bool
    {
        return $this->enableHeaderBar;
    }
    /**
     * Toggle header bar of the app view
     *
     * @param bool $enableHeaderBar
     *
     * @return self
     */
    public function setEnableHeaderBar(bool $enableHeaderBar): self
    {
        $this->enableHeaderBar = $enableHeaderBar;
        return $this;
    }
    /**
     * Toggle "Sign as" band on the top of the app view
     *
     * @return bool
     */
    public function getEnableHeaderBarSignAs(): bool
    {
        return $this->enableHeaderBarSignAs;
    }
    /**
     * Toggle "Sign as" band on the top of the app view
     *
     * @param bool $enableHeaderBarSignAs
     *
     * @return self
     */
    public function setEnableHeaderBarSignAs(bool $enableHeaderBarSignAs): self
    {
        $this->enableHeaderBarSignAs = $enableHeaderBarSignAs;
        return $this;
    }
    /**
     * Toggle sidebar of the app view
     *
     * @return bool
     */
    public function getEnableSidebar(): bool
    {
        return $this->enableSidebar;
    }
    /**
     * Toggle sidebar of the app view
     *
     * @param bool $enableSidebar
     *
     * @return self
     */
    public function setEnableSidebar(bool $enableSidebar): self
    {
        $this->enableSidebar = $enableSidebar;
        return $this;
    }
    /**
     * Toggle list of members in the procedure
     *
     * @return bool
     */
    public function getEnableMemberList(): bool
    {
        return $this->enableMemberList;
    }
    /**
     * Toggle list of members in the procedure
     *
     * @param bool $enableMemberList
     *
     * @return self
     */
    public function setEnableMemberList(bool $enableMemberList): self
    {
        $this->enableMemberList = $enableMemberList;
        return $this;
    }
    /**
     * Toggle list of documents in the procedure
     *
     * @return bool
     */
    public function getEnableDocumentList(): bool
    {
        return $this->enableDocumentList;
    }
    /**
     * Toggle list of documents in the procedure
     *
     * @param bool $enableDocumentList
     *
     * @return self
     */
    public function setEnableDocumentList(bool $enableDocumentList): self
    {
        $this->enableDocumentList = $enableDocumentList;
        return $this;
    }
    /**
     * Toggle downloads buttons for documents
     *
     * @return bool
     */
    public function getEnableDocumentDownload(): bool
    {
        return $this->enableDocumentDownload;
    }
    /**
     * Toggle downloads buttons for documents
     *
     * @param bool $enableDocumentDownload
     *
     * @return self
     */
    public function setEnableDocumentDownload(bool $enableDocumentDownload): self
    {
        $this->enableDocumentDownload = $enableDocumentDownload;
        return $this;
    }
    /**
     * Toggle activity feed
     *
     * @return bool
     */
    public function getEnableActivities(): bool
    {
        return $this->enableActivities;
    }
    /**
     * Toggle activity feed
     *
     * @param bool $enableActivities
     *
     * @return self
     */
    public function setEnableActivities(bool $enableActivities): self
    {
        $this->enableActivities = $enableActivities;
        return $this;
    }
    /**
     * True for use a popup for enter the SMS code, false for use a fullscreen view.
     *
     * @return bool
     */
    public function getAuthenticationPopup(): bool
    {
        return $this->authenticationPopup;
    }
    /**
     * True for use a popup for enter the SMS code, false for use a fullscreen view.
     *
     * @param bool $authenticationPopup
     *
     * @return self
     */
    public function setAuthenticationPopup(bool $authenticationPopup): self
    {
        $this->authenticationPopup = $authenticationPopup;
        return $this;
    }
    /**
     * Default value for zoom of the PDF viewer. Default value is the adapted to the resolution of your screen.
     *
     * @return float
     */
    public function getDefaultZoom(): float
    {
        return $this->defaultZoom;
    }
    /**
     * Default value for zoom of the PDF viewer. Default value is the adapted to the resolution of your screen.
     *
     * @param float $defaultZoom
     *
     * @return self
     */
    public function setDefaultZoom(float $defaultZoom): self
    {
        $this->defaultZoom = $defaultZoom;
        return $this;
    }
    /**
     * Base64 of your logo
     *
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }
    /**
     * Base64 of your logo
     *
     * @param string $logo
     *
     * @return self
     */
    public function setLogo(string $logo): self
    {
        $this->logo = $logo;
        return $this;
    }
    /**
     * Allow sign images types available for signature.
     *
     * @return string[]
     */
    public function getSignImageTypesAvailable(): array
    {
        return $this->signImageTypesAvailable;
    }
    /**
     * Allow sign images types available for signature.
     *
     * @param string[] $signImageTypesAvailable
     *
     * @return self
     */
    public function setSignImageTypesAvailable(array $signImageTypesAvailable): self
    {
        $this->signImageTypesAvailable = $signImageTypesAvailable;
        return $this;
    }
    /**
     * Default language of the view. Must be in "languages" field.
     *
     * @return string
     */
    public function getDefaultLanguage(): string
    {
        return $this->defaultLanguage;
    }
    /**
     * Default language of the view. Must be in "languages" field.
     *
     * @param string $defaultLanguage
     *
     * @return self
     */
    public function setDefaultLanguage(string $defaultLanguage): self
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }
    /**
     * Array of allowed languages, use country code
     *
     * @return string[]
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }
    /**
     * Array of allowed languages, use country code
     *
     * @param string[] $languages
     *
     * @return self
     */
    public function setLanguages(array $languages): self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     *
     *
     * @return SignatureUiLabelOutput[]
     */
    public function getLabels(): array
    {
        return $this->labels;
    }
    /**
     *
     *
     * @param SignatureUiLabelOutput[] $labels
     *
     * @return self
     */
    public function setLabels(array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * List of fonts to load on the view. (Loaded via google fonts)
     *
     * @return string[]
     */
    public function getFonts(): array
    {
        return $this->fonts;
    }
    /**
     * List of fonts to load on the view. (Loaded via google fonts)
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
     * Redirection when a procedure is refused
     *
     * @return SignatureUiOutputRedirectCancel
     */
    public function getRedirectCancel(): SignatureUiOutputRedirectCancel
    {
        return $this->redirectCancel;
    }
    /**
     * Redirection when a procedure is refused
     *
     * @param SignatureUiOutputRedirectCancel $redirectCancel
     *
     * @return self
     */
    public function setRedirectCancel(SignatureUiOutputRedirectCancel $redirectCancel): self
    {
        $this->redirectCancel = $redirectCancel;
        return $this;
    }
    /**
     * Redirect when the member get an error of the signature of the procedure
     *
     * @return SignatureUiOutputRedirectError
     */
    public function getRedirectError(): SignatureUiOutputRedirectError
    {
        return $this->redirectError;
    }
    /**
     * Redirect when the member get an error of the signature of the procedure
     *
     * @param SignatureUiOutputRedirectError $redirectError
     *
     * @return self
     */
    public function setRedirectError(SignatureUiOutputRedirectError $redirectError): self
    {
        $this->redirectError = $redirectError;
        return $this;
    }
    /**
     * Redirect when the member have successfully signed the procedure
     *
     * @return SignatureUiOutputRedirectSuccess
     */
    public function getRedirectSuccess(): SignatureUiOutputRedirectSuccess
    {
        return $this->redirectSuccess;
    }
    /**
     * Redirect when the member have successfully signed the procedure
     *
     * @param SignatureUiOutputRedirectSuccess $redirectSuccess
     *
     * @return self
     */
    public function setRedirectSuccess(SignatureUiOutputRedirectSuccess $redirectSuccess): self
    {
        $this->redirectSuccess = $redirectSuccess;
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
     * Associated Workspace's ID
     *
     * @return string
     */
    public function getWorkspace(): string
    {
        return $this->workspace;
    }
    /**
     * Associated Workspace's ID
     *
     * @param string $workspace
     *
     * @return self
     */
    public function setWorkspace(string $workspace): self
    {
        $this->workspace = $workspace;
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
