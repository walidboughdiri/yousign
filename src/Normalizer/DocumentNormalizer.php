<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Normalizer;

use IIYousign\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\Document';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\Document';
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \IIYousign\Model\Document();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('filename', $data)) {
            $object->setFilename($data['filename']);
        }
        if (\array_key_exists('nature', $data)) {
            $object->setNature($data['nature']);
        }
        if (\array_key_exists('content_type', $data)) {
            $object->setContentType($data['content_type']);
        }
        if (\array_key_exists('sha256', $data)) {
            $object->setSha256($data['sha256']);
        }
        if (\array_key_exists('is_protected', $data)) {
            $object->setIsProtected($data['is_protected']);
        }
        if (\array_key_exists('is_signed', $data)) {
            $object->setIsSigned($data['is_signed']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('total_pages', $data) && $data['total_pages'] !== null) {
            $object->setTotalPages($data['total_pages']);
        } elseif (\array_key_exists('total_pages', $data) && $data['total_pages'] === null) {
            $object->setTotalPages(null);
        }
        if (\array_key_exists('is_locked', $data)) {
            $object->setIsLocked($data['is_locked']);
        }
        if (\array_key_exists('initials', $data) && $data['initials'] !== null) {
            $object->setInitials($this->denormalizer->denormalize($data['initials'], 'IIYousign\\Model\\DocumentInitials', 'json', $context));
        } elseif (\array_key_exists('initials', $data) && $data['initials'] === null) {
            $object->setInitials(null);
        }
        if (\array_key_exists('total_anchors', $data)) {
            $object->setTotalAnchors($data['total_anchors']);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getFilename()) {
            $data['filename'] = $object->getFilename();
        }
        if (null !== $object->getNature()) {
            $data['nature'] = $object->getNature();
        }
        if (null !== $object->getContentType()) {
            $data['content_type'] = $object->getContentType();
        }
        if (null !== $object->getSha256()) {
            $data['sha256'] = $object->getSha256();
        }
        if (null !== $object->getIsProtected()) {
            $data['is_protected'] = $object->getIsProtected();
        }
        if (null !== $object->getIsSigned()) {
            $data['is_signed'] = $object->getIsSigned();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getTotalPages()) {
            $data['total_pages'] = $object->getTotalPages();
        }
        if (null !== $object->getIsLocked()) {
            $data['is_locked'] = $object->getIsLocked();
        }
        if (null !== $object->getInitials()) {
            $data['initials'] = $this->normalizer->normalize($object->getInitials(), 'json', $context);
        }
        if (null !== $object->getTotalAnchors()) {
            $data['total_anchors'] = $object->getTotalAnchors();
        }

        return $data;
    }
}
