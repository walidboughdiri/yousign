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

class FileObjectOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\FileObjectOutput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\FileObjectOutput';
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
        $object = new \IIYousign\Model\FileObjectOutput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($this->denormalizer->denormalize($data['file'], 'IIYousign\\Model\\FileOutput', 'json', $context));
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
        if (\array_key_exists('mention2 (internal)', $data) && $data['mention2 (internal)'] !== null) {
            $object->setMention2Internal($data['mention2 (internal)']);
        } elseif (\array_key_exists('mention2 (internal)', $data) && $data['mention2 (internal)'] === null) {
            $object->setMention2Internal(null);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updatedAt']));
        }
        if (\array_key_exists('executedAt', $data)) {
            $object->setExecutedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['executedAt']));
        }
        if (\array_key_exists('reason', $data)) {
            $object->setReason($data['reason']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('contentRequired', $data)) {
            $object->setContentRequired($data['contentRequired']);
        }
        if (\array_key_exists('content', $data)) {
            $object->setContent($data['content']);
        }
        if (\array_key_exists('fontFamily', $data)) {
            $object->setFontFamily($data['fontFamily']);
        }
        if (\array_key_exists('fontSize', $data)) {
            $object->setFontSize($data['fontSize']);
        }
        if (\array_key_exists('fontColor', $data)) {
            $object->setFontColor($data['fontColor']);
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
        $data['file'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
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
        if (null !== $object->getMention2Internal()) {
            $data['mention2 (internal)'] = $object->getMention2Internal();
        }
        if (null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getExecutedAt()) {
            $data['executedAt'] = $object->getExecutedAt()->format('Y-m-d\\TH:i:sP');
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
