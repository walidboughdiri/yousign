<?php

namespace IIYousign\Model;

class OrganizationOutput
{
    /**
     * Organization ID
     *
     * @var string
     */
    protected $id;
    /**
     * Organization name
     *
     * @var string
     */
    protected $name;
    /**
     * Custom URL for the Organization (internal usage only, should not be used)
     *
     * @var string
     */
    protected $url;
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
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fSso;
    /**
     * Internal usage, should not be used
     *
     * @var float
     */
    protected $maxUsers;
    /**
     *
     *
     * @var string[]
     */
    protected $subscriptions;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $autoCollection;
    /**
     * Internal usage, should not be used
     *
     * @var string
     */
    protected $vatNumber;
    /**
     *
     *
     * @var OrganizationBillingAddress
     */
    protected $billingAddress;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $inAppSupport;
    /**
     * Internal usage, should not be used
     *
     * @var string
     */
    protected $inAppUpdates;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fileTemplate;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fArchive;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fUserPermissions;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fProcedureTemplate;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fProcedureReminderAuto;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fApi;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fCheckdocument;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fProcedureCreate;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fSignatureUi;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fServerStamp;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fOperationLevelNone;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fConsentProcess;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fOperationLevelAdvanced;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fOperationCustomModeEmail;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fDynamicFields;
    /**
     * Defined if the organization enable the related files
     *
     * @var bool
     */
    protected $fProcedureRelatedFiles;
    /**
     * Internal usage, should not be used
     *
     * @var string
     */
    protected $samlIdentityProvider;
    /**
     * Pattern of the password policy for the organization
     *
     * @var string
     */
    protected $passwordPolicyPattern;
    /**
     * Description for the password policy
     *
     * @var string
     */
    protected $passwordPolicyDescription;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $userActivation;
    /**
     * Internal usage, should not be used
     *
     * @var bool
     */
    protected $fProcedureTemplatePermissions;
    /**
     * Organization ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Organization ID
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
     * Organization name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Organization name
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
     * Custom URL for the Organization (internal usage only, should not be used)
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Custom URL for the Organization (internal usage only, should not be used)
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
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
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFSso(): bool
    {
        return $this->fSso;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fSso
     *
     * @return self
     */
    public function setFSso(bool $fSso): self
    {
        $this->fSso = $fSso;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return float
     */
    public function getMaxUsers(): float
    {
        return $this->maxUsers;
    }
    /**
     * Internal usage, should not be used
     *
     * @param float $maxUsers
     *
     * @return self
     */
    public function setMaxUsers(float $maxUsers): self
    {
        $this->maxUsers = $maxUsers;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getSubscriptions(): array
    {
        return $this->subscriptions;
    }
    /**
     *
     *
     * @param string[] $subscriptions
     *
     * @return self
     */
    public function setSubscriptions(array $subscriptions): self
    {
        $this->subscriptions = $subscriptions;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getAutoCollection(): bool
    {
        return $this->autoCollection;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $autoCollection
     *
     * @return self
     */
    public function setAutoCollection(bool $autoCollection): self
    {
        $this->autoCollection = $autoCollection;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return string
     */
    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }
    /**
     * Internal usage, should not be used
     *
     * @param string $vatNumber
     *
     * @return self
     */
    public function setVatNumber(string $vatNumber): self
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }
    /**
     *
     *
     * @return OrganizationBillingAddress
     */
    public function getBillingAddress(): OrganizationBillingAddress
    {
        return $this->billingAddress;
    }
    /**
     *
     *
     * @param OrganizationBillingAddress $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(OrganizationBillingAddress $billingAddress): self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getInAppSupport(): bool
    {
        return $this->inAppSupport;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $inAppSupport
     *
     * @return self
     */
    public function setInAppSupport(bool $inAppSupport): self
    {
        $this->inAppSupport = $inAppSupport;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return string
     */
    public function getInAppUpdates(): string
    {
        return $this->inAppUpdates;
    }
    /**
     * Internal usage, should not be used
     *
     * @param string $inAppUpdates
     *
     * @return self
     */
    public function setInAppUpdates(string $inAppUpdates): self
    {
        $this->inAppUpdates = $inAppUpdates;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFileTemplate(): bool
    {
        return $this->fileTemplate;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fileTemplate
     *
     * @return self
     */
    public function setFileTemplate(bool $fileTemplate): self
    {
        $this->fileTemplate = $fileTemplate;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFArchive(): bool
    {
        return $this->fArchive;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fArchive
     *
     * @return self
     */
    public function setFArchive(bool $fArchive): self
    {
        $this->fArchive = $fArchive;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFUserPermissions(): bool
    {
        return $this->fUserPermissions;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fUserPermissions
     *
     * @return self
     */
    public function setFUserPermissions(bool $fUserPermissions): self
    {
        $this->fUserPermissions = $fUserPermissions;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFProcedureTemplate(): bool
    {
        return $this->fProcedureTemplate;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fProcedureTemplate
     *
     * @return self
     */
    public function setFProcedureTemplate(bool $fProcedureTemplate): self
    {
        $this->fProcedureTemplate = $fProcedureTemplate;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFProcedureReminderAuto(): bool
    {
        return $this->fProcedureReminderAuto;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fProcedureReminderAuto
     *
     * @return self
     */
    public function setFProcedureReminderAuto(bool $fProcedureReminderAuto): self
    {
        $this->fProcedureReminderAuto = $fProcedureReminderAuto;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFApi(): bool
    {
        return $this->fApi;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fApi
     *
     * @return self
     */
    public function setFApi(bool $fApi): self
    {
        $this->fApi = $fApi;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFCheckdocument(): bool
    {
        return $this->fCheckdocument;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fCheckdocument
     *
     * @return self
     */
    public function setFCheckdocument(bool $fCheckdocument): self
    {
        $this->fCheckdocument = $fCheckdocument;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFProcedureCreate(): bool
    {
        return $this->fProcedureCreate;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fProcedureCreate
     *
     * @return self
     */
    public function setFProcedureCreate(bool $fProcedureCreate): self
    {
        $this->fProcedureCreate = $fProcedureCreate;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFSignatureUi(): bool
    {
        return $this->fSignatureUi;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fSignatureUi
     *
     * @return self
     */
    public function setFSignatureUi(bool $fSignatureUi): self
    {
        $this->fSignatureUi = $fSignatureUi;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFServerStamp(): bool
    {
        return $this->fServerStamp;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fServerStamp
     *
     * @return self
     */
    public function setFServerStamp(bool $fServerStamp): self
    {
        $this->fServerStamp = $fServerStamp;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFOperationLevelNone(): bool
    {
        return $this->fOperationLevelNone;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fOperationLevelNone
     *
     * @return self
     */
    public function setFOperationLevelNone(bool $fOperationLevelNone): self
    {
        $this->fOperationLevelNone = $fOperationLevelNone;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFConsentProcess(): bool
    {
        return $this->fConsentProcess;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fConsentProcess
     *
     * @return self
     */
    public function setFConsentProcess(bool $fConsentProcess): self
    {
        $this->fConsentProcess = $fConsentProcess;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFOperationLevelAdvanced(): bool
    {
        return $this->fOperationLevelAdvanced;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fOperationLevelAdvanced
     *
     * @return self
     */
    public function setFOperationLevelAdvanced(bool $fOperationLevelAdvanced): self
    {
        $this->fOperationLevelAdvanced = $fOperationLevelAdvanced;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFOperationCustomModeEmail(): bool
    {
        return $this->fOperationCustomModeEmail;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fOperationCustomModeEmail
     *
     * @return self
     */
    public function setFOperationCustomModeEmail(bool $fOperationCustomModeEmail): self
    {
        $this->fOperationCustomModeEmail = $fOperationCustomModeEmail;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFDynamicFields(): bool
    {
        return $this->fDynamicFields;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fDynamicFields
     *
     * @return self
     */
    public function setFDynamicFields(bool $fDynamicFields): self
    {
        $this->fDynamicFields = $fDynamicFields;
        return $this;
    }
    /**
     * Defined if the organization enable the related files
     *
     * @return bool
     */
    public function getFProcedureRelatedFiles(): bool
    {
        return $this->fProcedureRelatedFiles;
    }
    /**
     * Defined if the organization enable the related files
     *
     * @param bool $fProcedureRelatedFiles
     *
     * @return self
     */
    public function setFProcedureRelatedFiles(bool $fProcedureRelatedFiles): self
    {
        $this->fProcedureRelatedFiles = $fProcedureRelatedFiles;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return string
     */
    public function getSamlIdentityProvider(): string
    {
        return $this->samlIdentityProvider;
    }
    /**
     * Internal usage, should not be used
     *
     * @param string $samlIdentityProvider
     *
     * @return self
     */
    public function setSamlIdentityProvider(string $samlIdentityProvider): self
    {
        $this->samlIdentityProvider = $samlIdentityProvider;
        return $this;
    }
    /**
     * Pattern of the password policy for the organization
     *
     * @return string
     */
    public function getPasswordPolicyPattern(): string
    {
        return $this->passwordPolicyPattern;
    }
    /**
     * Pattern of the password policy for the organization
     *
     * @param string $passwordPolicyPattern
     *
     * @return self
     */
    public function setPasswordPolicyPattern(string $passwordPolicyPattern): self
    {
        $this->passwordPolicyPattern = $passwordPolicyPattern;
        return $this;
    }
    /**
     * Description for the password policy
     *
     * @return string
     */
    public function getPasswordPolicyDescription(): string
    {
        return $this->passwordPolicyDescription;
    }
    /**
     * Description for the password policy
     *
     * @param string $passwordPolicyDescription
     *
     * @return self
     */
    public function setPasswordPolicyDescription(string $passwordPolicyDescription): self
    {
        $this->passwordPolicyDescription = $passwordPolicyDescription;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getUserActivation(): bool
    {
        return $this->userActivation;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $userActivation
     *
     * @return self
     */
    public function setUserActivation(bool $userActivation): self
    {
        $this->userActivation = $userActivation;
        return $this;
    }
    /**
     * Internal usage, should not be used
     *
     * @return bool
     */
    public function getFProcedureTemplatePermissions(): bool
    {
        return $this->fProcedureTemplatePermissions;
    }
    /**
     * Internal usage, should not be used
     *
     * @param bool $fProcedureTemplatePermissions
     *
     * @return self
     */
    public function setFProcedureTemplatePermissions(bool $fProcedureTemplatePermissions): self
    {
        $this->fProcedureTemplatePermissions = $fProcedureTemplatePermissions;
        return $this;
    }
}
