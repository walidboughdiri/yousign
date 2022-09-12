<?php

namespace IIYousign\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use IIYousign\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrganizationOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\OrganizationOutput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\OrganizationOutput';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \IIYousign\Model\OrganizationOutput();
        if (\array_key_exists('maxUsers', $data) && \is_int($data['maxUsers'])) {
            $data['maxUsers'] = (float) $data['maxUsers'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updatedAt']));
        }
        if (\array_key_exists('fSso', $data)) {
            $object->setFSso($data['fSso']);
        }
        if (\array_key_exists('maxUsers', $data)) {
            $object->setMaxUsers($data['maxUsers']);
        }
        if (\array_key_exists('subscriptions', $data)) {
            $values = array();
            foreach ($data['subscriptions'] as $value) {
                $values[] = $value;
            }
            $object->setSubscriptions($values);
        }
        if (\array_key_exists('autoCollection', $data)) {
            $object->setAutoCollection($data['autoCollection']);
        }
        if (\array_key_exists('vatNumber', $data)) {
            $object->setVatNumber($data['vatNumber']);
        }
        if (\array_key_exists('billingAddress', $data)) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billingAddress'], 'IIYousign\\Model\\OrganizationBillingAddress', 'json', $context));
        }
        if (\array_key_exists('inAppSupport', $data)) {
            $object->setInAppSupport($data['inAppSupport']);
        }
        if (\array_key_exists('inAppUpdates', $data)) {
            $object->setInAppUpdates($data['inAppUpdates']);
        }
        if (\array_key_exists('fileTemplate', $data)) {
            $object->setFileTemplate($data['fileTemplate']);
        }
        if (\array_key_exists('fArchive', $data)) {
            $object->setFArchive($data['fArchive']);
        }
        if (\array_key_exists('fUserPermissions', $data)) {
            $object->setFUserPermissions($data['fUserPermissions']);
        }
        if (\array_key_exists('fProcedureTemplate', $data)) {
            $object->setFProcedureTemplate($data['fProcedureTemplate']);
        }
        if (\array_key_exists('fProcedureReminderAuto', $data)) {
            $object->setFProcedureReminderAuto($data['fProcedureReminderAuto']);
        }
        if (\array_key_exists('fApi', $data)) {
            $object->setFApi($data['fApi']);
        }
        if (\array_key_exists('fCheckdocument', $data)) {
            $object->setFCheckdocument($data['fCheckdocument']);
        }
        if (\array_key_exists('fProcedureCreate', $data)) {
            $object->setFProcedureCreate($data['fProcedureCreate']);
        }
        if (\array_key_exists('fSignatureUi', $data)) {
            $object->setFSignatureUi($data['fSignatureUi']);
        }
        if (\array_key_exists('fServerStamp', $data)) {
            $object->setFServerStamp($data['fServerStamp']);
        }
        if (\array_key_exists('fOperationLevelNone', $data)) {
            $object->setFOperationLevelNone($data['fOperationLevelNone']);
        }
        if (\array_key_exists('fConsentProcess', $data)) {
            $object->setFConsentProcess($data['fConsentProcess']);
        }
        if (\array_key_exists('fOperationLevelAdvanced', $data)) {
            $object->setFOperationLevelAdvanced($data['fOperationLevelAdvanced']);
        }
        if (\array_key_exists('fOperationCustomModeEmail', $data)) {
            $object->setFOperationCustomModeEmail($data['fOperationCustomModeEmail']);
        }
        if (\array_key_exists('fDynamicFields', $data)) {
            $object->setFDynamicFields($data['fDynamicFields']);
        }
        if (\array_key_exists('fProcedureRelatedFiles', $data)) {
            $object->setFProcedureRelatedFiles($data['fProcedureRelatedFiles']);
        }
        if (\array_key_exists('samlIdentityProvider', $data)) {
            $object->setSamlIdentityProvider($data['samlIdentityProvider']);
        }
        if (\array_key_exists('passwordPolicyPattern', $data)) {
            $object->setPasswordPolicyPattern($data['passwordPolicyPattern']);
        }
        if (\array_key_exists('passwordPolicyDescription', $data)) {
            $object->setPasswordPolicyDescription($data['passwordPolicyDescription']);
        }
        if (\array_key_exists('userActivation', $data)) {
            $object->setUserActivation($data['userActivation']);
        }
        if (\array_key_exists('fProcedureTemplatePermissions', $data)) {
            $object->setFProcedureTemplatePermissions($data['fProcedureTemplatePermissions']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getFSso()) {
            $data['fSso'] = $object->getFSso();
        }
        if (null !== $object->getMaxUsers()) {
            $data['maxUsers'] = $object->getMaxUsers();
        }
        if (null !== $object->getSubscriptions()) {
            $values = array();
            foreach ($object->getSubscriptions() as $value) {
                $values[] = $value;
            }
            $data['subscriptions'] = $values;
        }
        if (null !== $object->getAutoCollection()) {
            $data['autoCollection'] = $object->getAutoCollection();
        }
        if (null !== $object->getVatNumber()) {
            $data['vatNumber'] = $object->getVatNumber();
        }
        if (null !== $object->getBillingAddress()) {
            $data['billingAddress'] = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        if (null !== $object->getInAppSupport()) {
            $data['inAppSupport'] = $object->getInAppSupport();
        }
        if (null !== $object->getInAppUpdates()) {
            $data['inAppUpdates'] = $object->getInAppUpdates();
        }
        if (null !== $object->getFileTemplate()) {
            $data['fileTemplate'] = $object->getFileTemplate();
        }
        if (null !== $object->getFArchive()) {
            $data['fArchive'] = $object->getFArchive();
        }
        if (null !== $object->getFUserPermissions()) {
            $data['fUserPermissions'] = $object->getFUserPermissions();
        }
        if (null !== $object->getFProcedureTemplate()) {
            $data['fProcedureTemplate'] = $object->getFProcedureTemplate();
        }
        if (null !== $object->getFProcedureReminderAuto()) {
            $data['fProcedureReminderAuto'] = $object->getFProcedureReminderAuto();
        }
        if (null !== $object->getFApi()) {
            $data['fApi'] = $object->getFApi();
        }
        if (null !== $object->getFCheckdocument()) {
            $data['fCheckdocument'] = $object->getFCheckdocument();
        }
        if (null !== $object->getFProcedureCreate()) {
            $data['fProcedureCreate'] = $object->getFProcedureCreate();
        }
        if (null !== $object->getFSignatureUi()) {
            $data['fSignatureUi'] = $object->getFSignatureUi();
        }
        if (null !== $object->getFServerStamp()) {
            $data['fServerStamp'] = $object->getFServerStamp();
        }
        if (null !== $object->getFOperationLevelNone()) {
            $data['fOperationLevelNone'] = $object->getFOperationLevelNone();
        }
        if (null !== $object->getFConsentProcess()) {
            $data['fConsentProcess'] = $object->getFConsentProcess();
        }
        if (null !== $object->getFOperationLevelAdvanced()) {
            $data['fOperationLevelAdvanced'] = $object->getFOperationLevelAdvanced();
        }
        if (null !== $object->getFOperationCustomModeEmail()) {
            $data['fOperationCustomModeEmail'] = $object->getFOperationCustomModeEmail();
        }
        if (null !== $object->getFDynamicFields()) {
            $data['fDynamicFields'] = $object->getFDynamicFields();
        }
        if (null !== $object->getFProcedureRelatedFiles()) {
            $data['fProcedureRelatedFiles'] = $object->getFProcedureRelatedFiles();
        }
        if (null !== $object->getSamlIdentityProvider()) {
            $data['samlIdentityProvider'] = $object->getSamlIdentityProvider();
        }
        if (null !== $object->getPasswordPolicyPattern()) {
            $data['passwordPolicyPattern'] = $object->getPasswordPolicyPattern();
        }
        if (null !== $object->getPasswordPolicyDescription()) {
            $data['passwordPolicyDescription'] = $object->getPasswordPolicyDescription();
        }
        if (null !== $object->getUserActivation()) {
            $data['userActivation'] = $object->getUserActivation();
        }
        if (null !== $object->getFProcedureTemplatePermissions()) {
            $data['fProcedureTemplatePermissions'] = $object->getFProcedureTemplatePermissions();
        }
        return $data;
    }
}
