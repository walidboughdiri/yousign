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

class FileObjectInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\FileObjectInput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\FileObjectInput';
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
        $object = new \IIYousign\Model\FileObjectInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($data['file']);
        }
        if (\array_key_exists('page', $data) && $data['page'] !== null) {
            $object->setPage($data['page']);
        } elseif (\array_key_exists('page', $data) && $data['page'] === null) {
            $object->setPage(null);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        } elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('fieldName', $data) && $data['fieldName'] !== null) {
            $object->setFieldName($data['fieldName']);
        } elseif (\array_key_exists('fieldName', $data) && $data['fieldName'] === null) {
            $object->setFieldName(null);
        }
        if (\array_key_exists('mention', $data) && $data['mention'] !== null) {
            $object->setMention($data['mention']);
        } elseif (\array_key_exists('mention', $data) && $data['mention'] === null) {
            $object->setMention(null);
        }
        if (\array_key_exists('mention2', $data) && $data['mention2'] !== null) {
            $object->setMention2($data['mention2']);
        } elseif (\array_key_exists('mention2', $data) && $data['mention2'] === null) {
            $object->setMention2(null);
        }
        if (\array_key_exists('member', $data) && $data['member'] !== null) {
            $object->setMember($data['member']);
        } elseif (\array_key_exists('member', $data) && $data['member'] === null) {
            $object->setMember(null);
        }
        if (\array_key_exists('reason', $data) && $data['reason'] !== null) {
            $object->setReason($data['reason']);
        } elseif (\array_key_exists('reason', $data) && $data['reason'] === null) {
            $object->setReason(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('contentRequired', $data) && $data['contentRequired'] !== null) {
            $object->setContentRequired($data['contentRequired']);
        } elseif (\array_key_exists('contentRequired', $data) && $data['contentRequired'] === null) {
            $object->setContentRequired(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $object->setContent($data['content']);
        } elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('fontFamily', $data) && $data['fontFamily'] !== null) {
            $object->setFontFamily($data['fontFamily']);
        } elseif (\array_key_exists('fontFamily', $data) && $data['fontFamily'] === null) {
            $object->setFontFamily(null);
        }
        if (\array_key_exists('fontSize', $data) && $data['fontSize'] !== null) {
            $object->setFontSize($data['fontSize']);
        } elseif (\array_key_exists('fontSize', $data) && $data['fontSize'] === null) {
            $object->setFontSize(null);
        }
        if (\array_key_exists('fontColor', $data) && $data['fontColor'] !== null) {
            $object->setFontColor($data['fontColor']);
        } elseif (\array_key_exists('fontColor', $data) && $data['fontColor'] === null) {
            $object->setFontColor(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['file'] = $object->getFile();
        if (null !== $object->getPage()) {
            $data['page'] = $object->getPage();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if (null !== $object->getFieldName()) {
            $data['fieldName'] = $object->getFieldName();
        }
        if (null !== $object->getMention()) {
            $data['mention'] = $object->getMention();
        }
        if (null !== $object->getMention2()) {
            $data['mention2'] = $object->getMention2();
        }
        if (null !== $object->getMember()) {
            $data['member'] = $object->getMember();
        }
        if (null !== $object->getReason()) {
            $data['reason'] = $object->getReason();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getContentRequired()) {
            $data['contentRequired'] = $object->getContentRequired();
        }
        if (null !== $object->getContent()) {
            $data['content'] = $object->getContent();
        }
        if (null !== $object->getFontFamily()) {
            $data['fontFamily'] = $object->getFontFamily();
        }
        if (null !== $object->getFontSize()) {
            $data['fontSize'] = $object->getFontSize();
        }
        if (null !== $object->getFontColor()) {
            $data['fontColor'] = $object->getFontColor();
        }
        return $data;
    }
}
