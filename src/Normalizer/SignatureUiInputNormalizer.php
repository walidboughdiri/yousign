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

class SignatureUiInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\SignatureUiInput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\SignatureUiInput';
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
        $object = new \IIYousign\Model\SignatureUiInput();
        if (\array_key_exists('defaultZoom', $data) && \is_int($data['defaultZoom'])) {
            $data['defaultZoom'] = (float) $data['defaultZoom'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('enableHeaderBar', $data) && $data['enableHeaderBar'] !== null) {
            $object->setEnableHeaderBar($data['enableHeaderBar']);
        } elseif (\array_key_exists('enableHeaderBar', $data) && $data['enableHeaderBar'] === null) {
            $object->setEnableHeaderBar(null);
        }
        if (\array_key_exists('enableHeaderBarSignAs', $data) && $data['enableHeaderBarSignAs'] !== null) {
            $object->setEnableHeaderBarSignAs($data['enableHeaderBarSignAs']);
        } elseif (\array_key_exists('enableHeaderBarSignAs', $data) && $data['enableHeaderBarSignAs'] === null) {
            $object->setEnableHeaderBarSignAs(null);
        }
        if (\array_key_exists('enableSidebar', $data) && $data['enableSidebar'] !== null) {
            $object->setEnableSidebar($data['enableSidebar']);
        } elseif (\array_key_exists('enableSidebar', $data) && $data['enableSidebar'] === null) {
            $object->setEnableSidebar(null);
        }
        if (\array_key_exists('enableMemberList', $data) && $data['enableMemberList'] !== null) {
            $object->setEnableMemberList($data['enableMemberList']);
        } elseif (\array_key_exists('enableMemberList', $data) && $data['enableMemberList'] === null) {
            $object->setEnableMemberList(null);
        }
        if (\array_key_exists('enableDocumentList', $data) && $data['enableDocumentList'] !== null) {
            $object->setEnableDocumentList($data['enableDocumentList']);
        } elseif (\array_key_exists('enableDocumentList', $data) && $data['enableDocumentList'] === null) {
            $object->setEnableDocumentList(null);
        }
        if (\array_key_exists('enableDocumentDownload', $data) && $data['enableDocumentDownload'] !== null) {
            $object->setEnableDocumentDownload($data['enableDocumentDownload']);
        } elseif (\array_key_exists('enableDocumentDownload', $data) && $data['enableDocumentDownload'] === null) {
            $object->setEnableDocumentDownload(null);
        }
        if (\array_key_exists('enableActivities', $data) && $data['enableActivities'] !== null) {
            $object->setEnableActivities($data['enableActivities']);
        } elseif (\array_key_exists('enableActivities', $data) && $data['enableActivities'] === null) {
            $object->setEnableActivities(null);
        }
        if (\array_key_exists('authenticationPopup', $data) && $data['authenticationPopup'] !== null) {
            $object->setAuthenticationPopup($data['authenticationPopup']);
        } elseif (\array_key_exists('authenticationPopup', $data) && $data['authenticationPopup'] === null) {
            $object->setAuthenticationPopup(null);
        }
        if (\array_key_exists('defaultZoom', $data) && $data['defaultZoom'] !== null) {
            $object->setDefaultZoom($data['defaultZoom']);
        } elseif (\array_key_exists('defaultZoom', $data) && $data['defaultZoom'] === null) {
            $object->setDefaultZoom(null);
        }
        if (\array_key_exists('logo', $data) && $data['logo'] !== null) {
            $object->setLogo($data['logo']);
        } elseif (\array_key_exists('logo', $data) && $data['logo'] === null) {
            $object->setLogo(null);
        }
        if (\array_key_exists('signImageTypesAvailable', $data) && $data['signImageTypesAvailable'] !== null) {
            $values = array();
            foreach ($data['signImageTypesAvailable'] as $value) {
                $values[] = $value;
            }
            $object->setSignImageTypesAvailable($values);
        } elseif (\array_key_exists('signImageTypesAvailable', $data) && $data['signImageTypesAvailable'] === null) {
            $object->setSignImageTypesAvailable(null);
        }
        if (\array_key_exists('defaultLanguage', $data) && $data['defaultLanguage'] !== null) {
            $object->setDefaultLanguage($data['defaultLanguage']);
        } elseif (\array_key_exists('defaultLanguage', $data) && $data['defaultLanguage'] === null) {
            $object->setDefaultLanguage(null);
        }
        if (\array_key_exists('languages', $data) && $data['languages'] !== null) {
            $values_1 = array();
            foreach ($data['languages'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLanguages($values_1);
        } elseif (\array_key_exists('languages', $data) && $data['languages'] === null) {
            $object->setLanguages(null);
        }
        if (\array_key_exists('labels', $data)) {
            $values_2 = array();
            foreach ($data['labels'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'IIYousign\\Model\\SignatureUiLabelInputIncluded', 'json', $context);
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
            $object->setRedirectCancel($this->denormalizer->denormalize($data['redirectCancel'], 'IIYousign\\Model\\SignatureUiInputRedirectCancel', 'json', $context));
        }
        if (\array_key_exists('redirectError', $data)) {
            $object->setRedirectError($this->denormalizer->denormalize($data['redirectError'], 'IIYousign\\Model\\SignatureUiInputRedirectError', 'json', $context));
        }
        if (\array_key_exists('redirectSuccess', $data)) {
            $object->setRedirectSuccess($this->denormalizer->denormalize($data['redirectSuccess'], 'IIYousign\\Model\\SignatureUiInputRedirectSuccess', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
        return $data;
    }
}
