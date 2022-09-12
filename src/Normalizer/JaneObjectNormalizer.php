<?php

namespace IIYousign\Normalizer;

use IIYousign\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('IIYousign\\Model\\ConfigEmailTemplate' => 'IIYousign\\Normalizer\\ConfigEmailTemplateNormalizer', 'IIYousign\\Model\\OrganizationOutput' => 'IIYousign\\Normalizer\\OrganizationOutputNormalizer', 'IIYousign\\Model\\OrganizationBillingAddress' => 'IIYousign\\Normalizer\\OrganizationBillingAddressNormalizer', 'IIYousign\\Model\\WorkspaceOutput' => 'IIYousign\\Normalizer\\WorkspaceOutputNormalizer', 'IIYousign\\Model\\WorkspaceConfig' => 'IIYousign\\Normalizer\\WorkspaceConfigNormalizer', 'IIYousign\\Model\\WorkspaceConfigProcedure' => 'IIYousign\\Normalizer\\WorkspaceConfigProcedureNormalizer', 'IIYousign\\Model\\WorkspaceConfigEmail' => 'IIYousign\\Normalizer\\WorkspaceConfigEmailNormalizer', 'IIYousign\\Model\\UserInput' => 'IIYousign\\Normalizer\\UserInputNormalizer', 'IIYousign\\Model\\UserInputConfig' => 'IIYousign\\Normalizer\\UserInputConfigNormalizer', 'IIYousign\\Model\\UserInputNotifications' => 'IIYousign\\Normalizer\\UserInputNotificationsNormalizer', 'IIYousign\\Model\\UserOutput' => 'IIYousign\\Normalizer\\UserOutputNormalizer', 'IIYousign\\Model\\UserOutputConfig' => 'IIYousign\\Normalizer\\UserOutputConfigNormalizer', 'IIYousign\\Model\\UserOutputNotifications' => 'IIYousign\\Normalizer\\UserOutputNotificationsNormalizer', 'IIYousign\\Model\\UserWorkspaceOutput' => 'IIYousign\\Normalizer\\UserWorkspaceOutputNormalizer', 'IIYousign\\Model\\UserGroup' => 'IIYousign\\Normalizer\\UserGroupNormalizer', 'IIYousign\\Model\\FileInput' => 'IIYousign\\Normalizer\\FileInputNormalizer', 'IIYousign\\Model\\FileInputMetadata' => 'IIYousign\\Normalizer\\FileInputMetadataNormalizer', 'IIYousign\\Model\\FileOutput' => 'IIYousign\\Normalizer\\FileOutputNormalizer', 'IIYousign\\Model\\FileOutputMetadata' => 'IIYousign\\Normalizer\\FileOutputMetadataNormalizer', 'IIYousign\\Model\\ProcedureInput' => 'IIYousign\\Normalizer\\ProcedureInputNormalizer', 'IIYousign\\Model\\ProcedureInputMetadata' => 'IIYousign\\Normalizer\\ProcedureInputMetadataNormalizer', 'IIYousign\\Model\\ProcedureDuplicateInput' => 'IIYousign\\Normalizer\\ProcedureDuplicateInputNormalizer', 'IIYousign\\Model\\ProcedureConfig' => 'IIYousign\\Normalizer\\ProcedureConfigNormalizer', 'IIYousign\\Model\\ProcedureConfigWebhook' => 'IIYousign\\Normalizer\\ProcedureConfigWebhookNormalizer', 'IIYousign\\Model\\ProcedureConfigReminder' => 'IIYousign\\Normalizer\\ProcedureConfigReminderNormalizer', 'IIYousign\\Model\\ProcedureConfigEmail' => 'IIYousign\\Normalizer\\ProcedureConfigEmailNormalizer', 'IIYousign\\Model\\ProcedureConfigReminderConfig' => 'IIYousign\\Normalizer\\ProcedureConfigReminderConfigNormalizer', 'IIYousign\\Model\\ProcedureConfigReminderConfigEmail' => 'IIYousign\\Normalizer\\ProcedureConfigReminderConfigEmailNormalizer', 'IIYousign\\Model\\ProcedureOutput' => 'IIYousign\\Normalizer\\ProcedureOutputNormalizer', 'IIYousign\\Model\\ProcedureOutputMetadata' => 'IIYousign\\Normalizer\\ProcedureOutputMetadataNormalizer', 'IIYousign\\Model\\ProcedureRemindInput' => 'IIYousign\\Normalizer\\ProcedureRemindInputNormalizer', 'IIYousign\\Model\\ProcedureRemindConfig' => 'IIYousign\\Normalizer\\ProcedureRemindConfigNormalizer', 'IIYousign\\Model\\ProcedureRemindConfigEmail' => 'IIYousign\\Normalizer\\ProcedureRemindConfigEmailNormalizer', 'IIYousign\\Model\\ConfigWebhookTemplate' => 'IIYousign\\Normalizer\\ConfigWebhookTemplateNormalizer', 'IIYousign\\Model\\MemberInput' => 'IIYousign\\Normalizer\\MemberInputNormalizer', 'IIYousign\\Model\\MemberOutput' => 'IIYousign\\Normalizer\\MemberOutputNormalizer', 'IIYousign\\Model\\OperationModeSmsConfiguration' => 'IIYousign\\Normalizer\\OperationModeSmsConfigurationNormalizer', 'IIYousign\\Model\\FileObjectInput' => 'IIYousign\\Normalizer\\FileObjectInputNormalizer', 'IIYousign\\Model\\FileObjectOutput' => 'IIYousign\\Normalizer\\FileObjectOutputNormalizer', 'IIYousign\\Model\\FileObjectInputWithoutFileReference' => 'IIYousign\\Normalizer\\FileObjectInputWithoutFileReferenceNormalizer', 'IIYousign\\Model\\FileObjectOutputWithoutFileReference' => 'IIYousign\\Normalizer\\FileObjectOutputWithoutFileReferenceNormalizer', 'IIYousign\\Model\\OperationOutput' => 'IIYousign\\Normalizer\\OperationOutputNormalizer', 'IIYousign\\Model\\OperationOutputMetadata' => 'IIYousign\\Normalizer\\OperationOutputMetadataNormalizer', 'IIYousign\\Model\\OperationInput' => 'IIYousign\\Normalizer\\OperationInputNormalizer', 'IIYousign\\Model\\OperationInputMetadata' => 'IIYousign\\Normalizer\\OperationInputMetadataNormalizer', 'IIYousign\\Model\\AuthenticationInweboOutput' => 'IIYousign\\Normalizer\\AuthenticationInweboOutputNormalizer', 'IIYousign\\Model\\AuthenticationSmsOutput' => 'IIYousign\\Normalizer\\AuthenticationSmsOutputNormalizer', 'IIYousign\\Model\\AuthenticationEmailOutput' => 'IIYousign\\Normalizer\\AuthenticationEmailOutputNormalizer', 'IIYousign\\Model\\ConsentProcessOutput' => 'IIYousign\\Normalizer\\ConsentProcessOutputNormalizer', 'IIYousign\\Model\\ConsentProcessInput' => 'IIYousign\\Normalizer\\ConsentProcessInputNormalizer', 'IIYousign\\Model\\ConsentProcessValueInput' => 'IIYousign\\Normalizer\\ConsentProcessValueInputNormalizer', 'IIYousign\\Model\\ConsentProcessValueOutput' => 'IIYousign\\Normalizer\\ConsentProcessValueOutputNormalizer', 'IIYousign\\Model\\SignatureUiInput' => 'IIYousign\\Normalizer\\SignatureUiInputNormalizer', 'IIYousign\\Model\\SignatureUiInputRedirectCancel' => 'IIYousign\\Normalizer\\SignatureUiInputRedirectCancelNormalizer', 'IIYousign\\Model\\SignatureUiInputRedirectError' => 'IIYousign\\Normalizer\\SignatureUiInputRedirectErrorNormalizer', 'IIYousign\\Model\\SignatureUiInputRedirectSuccess' => 'IIYousign\\Normalizer\\SignatureUiInputRedirectSuccessNormalizer', 'IIYousign\\Model\\SignatureUiLabelInput' => 'IIYousign\\Normalizer\\SignatureUiLabelInputNormalizer', 'IIYousign\\Model\\SignatureUiLabelInputLanguages' => 'IIYousign\\Normalizer\\SignatureUiLabelInputLanguagesNormalizer', 'IIYousign\\Model\\SignatureUiLabelInputIncluded' => 'IIYousign\\Normalizer\\SignatureUiLabelInputIncludedNormalizer', 'IIYousign\\Model\\SignatureUiLabelInputIncludedLanguages' => 'IIYousign\\Normalizer\\SignatureUiLabelInputIncludedLanguagesNormalizer', 'IIYousign\\Model\\SignatureUiLabelOutput' => 'IIYousign\\Normalizer\\SignatureUiLabelOutputNormalizer', 'IIYousign\\Model\\SignatureUiLabelOutputLanguages' => 'IIYousign\\Normalizer\\SignatureUiLabelOutputLanguagesNormalizer', 'IIYousign\\Model\\SignatureUiOutput' => 'IIYousign\\Normalizer\\SignatureUiOutputNormalizer', 'IIYousign\\Model\\SignatureUiOutputRedirectCancel' => 'IIYousign\\Normalizer\\SignatureUiOutputRedirectCancelNormalizer', 'IIYousign\\Model\\SignatureUiOutputRedirectError' => 'IIYousign\\Normalizer\\SignatureUiOutputRedirectErrorNormalizer', 'IIYousign\\Model\\SignatureUiOutputRedirectSuccess' => 'IIYousign\\Normalizer\\SignatureUiOutputRedirectSuccessNormalizer', 'IIYousign\\Model\\SignatureUiInputUpdate' => 'IIYousign\\Normalizer\\SignatureUiInputUpdateNormalizer', 'IIYousign\\Model\\SignatureUiInputUpdateRedirectCancel' => 'IIYousign\\Normalizer\\SignatureUiInputUpdateRedirectCancelNormalizer', 'IIYousign\\Model\\SignatureUiInputUpdateRedirectError' => 'IIYousign\\Normalizer\\SignatureUiInputUpdateRedirectErrorNormalizer', 'IIYousign\\Model\\SignatureUiInputUpdateRedirectSuccess' => 'IIYousign\\Normalizer\\SignatureUiInputUpdateRedirectSuccessNormalizer', 'IIYousign\\Model\\ServerStampInput' => 'IIYousign\\Normalizer\\ServerStampInputNormalizer', 'IIYousign\\Model\\ServerStampOutput' => 'IIYousign\\Normalizer\\ServerStampOutputNormalizer', 'IIYousign\\Model\\ServerStampConfig' => 'IIYousign\\Normalizer\\ServerStampConfigNormalizer', 'IIYousign\\Model\\ServerStampConfigWebhook' => 'IIYousign\\Normalizer\\ServerStampConfigWebhookNormalizer', 'IIYousign\\Model\\CheckDocumentIdentitiesInput' => 'IIYousign\\Normalizer\\CheckDocumentIdentitiesInputNormalizer', 'IIYousign\\Model\\CheckDocumentIdentitiesOutput' => 'IIYousign\\Normalizer\\CheckDocumentIdentitiesOutputNormalizer', 'IIYousign\\Model\\CheckDocumentBankAccountsInput' => 'IIYousign\\Normalizer\\CheckDocumentBankAccountsInputNormalizer', 'IIYousign\\Model\\CheckDocumentBankAccountsOutput' => 'IIYousign\\Normalizer\\CheckDocumentBankAccountsOutputNormalizer', 'IIYousign\\Model\\Unauthorized' => 'IIYousign\\Normalizer\\UnauthorizedNormalizer', 'IIYousign\\Model\\ServerError' => 'IIYousign\\Normalizer\\ServerErrorNormalizer', 'IIYousign\\Model\\Violation' => 'IIYousign\\Normalizer\\ViolationNormalizer', 'IIYousign\\Model\\BadRequest' => 'IIYousign\\Normalizer\\BadRequestNormalizer', 'IIYousign\\Model\\NotFound' => 'IIYousign\\Normalizer\\NotFoundNormalizer', 'IIYousign\\Model\\AuthenticationsInweboIdPutBody' => 'IIYousign\\Normalizer\\AuthenticationsInweboIdPutBodyNormalizer', 'IIYousign\\Model\\AuthenticationsSmsIdPutBody' => 'IIYousign\\Normalizer\\AuthenticationsSmsIdPutBodyNormalizer', 'IIYousign\\Model\\AuthenticationsEmailIdPutBody' => 'IIYousign\\Normalizer\\AuthenticationsEmailIdPutBodyNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\IIYousign\\Runtime\\Normalizer\\ReferenceNormalizer');
    protected $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}
