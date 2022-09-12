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

class FileObjectOutputWithoutFileReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\FileObjectOutputWithoutFileReference';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\FileObjectOutputWithoutFileReference';
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
        $object = new \IIYousign\Model\FileObjectOutputWithoutFileReference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('fieldName', $data)) {
            $object->setFieldName($data['fieldName']);
        }
        if (\array_key_exists('mention', $data)) {
            $object->setMention($data['mention']);
        }
        if (\array_key_exists('mention2 (internal)', $data)) {
            $object->setMention2Internal($data['mention2 (internal)']);
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
        return $data;
    }
}
