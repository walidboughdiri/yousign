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

class SignatureUiOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\SignatureUiOutput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\SignatureUiOutput';
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
        $object = new \IIYousign\Model\SignatureUiOutput();
        if (\array_key_exists('defaultZoom', $data) && \is_int($data['defaultZoom'])) {
            $data['defaultZoom'] = (float) $data['defaultZoom'];
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
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('enableHeaderBar', $data)) {
            $object->setEnableHeaderBar($data['enableHeaderBar']);
        }
        if (\array_key_exists('enableHeaderBarSignAs', $data)) {
            $object->setEnableHeaderBarSignAs($data['enableHeaderBarSignAs']);
        }
        if (\array_key_exists('enableSidebar', $data)) {
            $object->setEnableSidebar($data['enableSidebar']);
        }
        if (\array_key_exists('enableMemberList', $data)) {
            $object->setEnableMemberList($data['enableMemberList']);
        }
        if (\array_key_exists('enableDocumentList', $data)) {
            $object->setEnableDocumentList($data['enableDocumentList']);
        }
        if (\array_key_exists('enableDocumentDownload', $data)) {
            $object->setEnableDocumentDownload($data['enableDocumentDownload']);
        }
        if (\array_key_exists('enableActivities', $data)) {
            $object->setEnableActivities($data['enableActivities']);
        }
        if (\array_key_exists('authenticationPopup', $data)) {
            $object->setAuthenticationPopup($data['authenticationPopup']);
        }
        if (\array_key_exists('defaultZoom', $data)) {
            $object->setDefaultZoom($data['defaultZoom']);
        }
        if (\array_key_exists('logo', $data)) {
            $object->setLogo($data['logo']);
        }
        if (\array_key_exists('signImageTypesAvailable', $data)) {
            $values = array();
            foreach ($data['signImageTypesAvailable'] as $value) {
                $values[] = $value;
            }
            $object->setSignImageTypesAvailable($values);
        }
        if (\array_key_exists('defaultLanguage', $data)) {
            $object->setDefaultLanguage($data['defaultLanguage']);
        }
        if (\array_key_exists('languages', $data)) {
            $values_1 = array();
            foreach ($data['languages'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLanguages($values_1);
        }
        if (\array_key_exists('labels', $data)) {
            $values_2 = array();
            foreach ($data['labels'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'IIYousign\\Model\\SignatureUiLabelOutput', 'json', $context);
            }
            $object->setLabels($values_2);
        }
        if (\array_key_exists('fonts', $data)) {
            $values_3 = array();
            foreach ($data['fonts'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setFonts($values_3);
        }
        if (\array_key_exists('style', $data)) {
            $object->setStyle($data['style']);
        }
        if (\array_key_exists('redirectCancel', $data)) {
            $object->setRedirectCancel($this->denormalizer->denormalize($data['redirectCancel'], 'IIYousign\\Model\\SignatureUiOutputRedirectCancel', 'json', $context));
        }
        if (\array_key_exists('redirectError', $data)) {
            $object->setRedirectError($this->denormalizer->denormalize($data['redirectError'], 'IIYousign\\Model\\SignatureUiOutputRedirectError', 'json', $context));
        }
        if (\array_key_exists('redirectSuccess', $data)) {
            $object->setRedirectSuccess($this->denormalizer->denormalize($data['redirectSuccess'], 'IIYousign\\Model\\SignatureUiOutputRedirectSuccess', 'json', $context));
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($data['creator']);
        }
        if (\array_key_exists('workspace', $data)) {
            $object->setWorkspace($data['workspace']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updatedAt']));
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
        $data['name'] = $object->getName();
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getEnableHeaderBar()) {
            $data['enableHeaderBar'] = $object->getEnableHeaderBar();
        }
        if (null !== $object->getEnableHeaderBarSignAs()) {
            $data['enableHeaderBarSignAs'] = $object->getEnableHeaderBarSignAs();
        }
        if (null !== $object->getEnableSidebar()) {
            $data['enableSidebar'] = $object->getEnableSidebar();
        }
        if (null !== $object->getEnableMemberList()) {
            $data['enableMemberList'] = $object->getEnableMemberList();
        }
        if (null !== $object->getEnableDocumentList()) {
            $data['enableDocumentList'] = $object->getEnableDocumentList();
        }
        if (null !== $object->getEnableDocumentDownload()) {
            $data['enableDocumentDownload'] = $object->getEnableDocumentDownload();
        }
        if (null !== $object->getEnableActivities()) {
            $data['enableActivities'] = $object->getEnableActivities();
        }
        if (null !== $object->getAuthenticationPopup()) {
            $data['authenticationPopup'] = $object->getAuthenticationPopup();
        }
        if (null !== $object->getDefaultZoom()) {
            $data['defaultZoom'] = $object->getDefaultZoom();
        }
        if (null !== $object->getLogo()) {
            $data['logo'] = $object->getLogo();
        }
        if (null !== $object->getSignImageTypesAvailable()) {
            $values = array();
            foreach ($object->getSignImageTypesAvailable() as $value) {
                $values[] = $value;
            }
            $data['signImageTypesAvailable'] = $values;
        }
        if (null !== $object->getDefaultLanguage()) {
            $data['defaultLanguage'] = $object->getDefaultLanguage();
        }
        if (null !== $object->getLanguages()) {
            $values_1 = array();
            foreach ($object->getLanguages() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['languages'] = $values_1;
        }
        if (null !== $object->getLabels()) {
            $values_2 = array();
            foreach ($object->getLabels() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['labels'] = $values_2;
        }
        if (null !== $object->getFonts()) {
            $values_3 = array();
            foreach ($object->getFonts() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['fonts'] = $values_3;
        }
        if (null !== $object->getStyle()) {
            $data['style'] = $object->getStyle();
        }
        if (null !== $object->getRedirectCancel()) {
            $data['redirectCancel'] = $this->normalizer->normalize($object->getRedirectCancel(), 'json', $context);
        }
        if (null !== $object->getRedirectError()) {
            $data['redirectError'] = $this->normalizer->normalize($object->getRedirectError(), 'json', $context);
        }
        if (null !== $object->getRedirectSuccess()) {
            $data['redirectSuccess'] = $this->normalizer->normalize($object->getRedirectSuccess(), 'json', $context);
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $object->getCreator();
        }
        if (null !== $object->getWorkspace()) {
            $data['workspace'] = $object->getWorkspace();
        }
        if (null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}
