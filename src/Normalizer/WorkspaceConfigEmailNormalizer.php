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

class WorkspaceConfigEmailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\WorkspaceConfigEmail';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\WorkspaceConfigEmail';
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
        $object = new \IIYousign\Model\WorkspaceConfigEmail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('procedure.started', $data)) {
            $values = array();
            foreach ($data['procedure.started'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'IIYousign\\Model\\ConfigEmailTemplate', 'json', $context);
            }
            $object->setProcedureStarted($values);
        }
        if (\array_key_exists('procedure.finished', $data)) {
            $values_1 = array();
            foreach ($data['procedure.finished'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'IIYousign\\Model\\ConfigEmailTemplate', 'json', $context);
            }
            $object->setProcedureFinished($values_1);
        }
        if (\array_key_exists('procedure.refused', $data)) {
            $values_2 = array();
            foreach ($data['procedure.refused'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'IIYousign\\Model\\ConfigEmailTemplate', 'json', $context);
            }
            $object->setProcedureRefused($values_2);
        }
        if (\array_key_exists('procedure.expired', $data)) {
            $values_3 = array();
            foreach ($data['procedure.expired'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'IIYousign\\Model\\ConfigEmailTemplate', 'json', $context);
            }
            $object->setProcedureExpired($values_3);
        }
        if (\array_key_exists('procedure.deleted', $data)) {
            $values_4 = array();
            foreach ($data['procedure.deleted'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'IIYousign\\Model\\ConfigEmailTemplate', 'json', $context);
            }
            $object->setProcedureDeleted($values_4);
        }
        if (\array_key_exists('member.started', $data)) {
            $values_5 = array();
            foreach ($data['member.started'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'IIYousign\\Model\\ConfigEmailTemplate', 'json', $context);
            }
            $object->setMemberStarted($values_5);
        }
        if (\array_key_exists('member.finished', $data)) {
            $values_6 = array();
            foreach ($data['member.finished'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'IIYousign\\Model\\ConfigEmailTemplate', 'json', $context);
            }
            $object->setMemberFinished($values_6);
        }
        if (\array_key_exists('comment.created', $data)) {
            $values_7 = array();
            foreach ($data['comment.created'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'IIYousign\\Model\\ConfigEmailTemplate', 'json', $context);
            }
            $object->setCommentCreated($values_7);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProcedureStarted()) {
            $values = array();
            foreach ($object->getProcedureStarted() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['procedure.started'] = $values;
        }
        if (null !== $object->getProcedureFinished()) {
            $values_1 = array();
            foreach ($object->getProcedureFinished() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['procedure.finished'] = $values_1;
        }
        if (null !== $object->getProcedureRefused()) {
            $values_2 = array();
            foreach ($object->getProcedureRefused() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['procedure.refused'] = $values_2;
        }
        if (null !== $object->getProcedureExpired()) {
            $values_3 = array();
            foreach ($object->getProcedureExpired() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['procedure.expired'] = $values_3;
        }
        if (null !== $object->getProcedureDeleted()) {
            $values_4 = array();
            foreach ($object->getProcedureDeleted() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['procedure.deleted'] = $values_4;
        }
        if (null !== $object->getMemberStarted()) {
            $values_5 = array();
            foreach ($object->getMemberStarted() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['member.started'] = $values_5;
        }
        if (null !== $object->getMemberFinished()) {
            $values_6 = array();
            foreach ($object->getMemberFinished() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['member.finished'] = $values_6;
        }
        if (null !== $object->getCommentCreated()) {
            $values_7 = array();
            foreach ($object->getCommentCreated() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['comment.created'] = $values_7;
        }
        return $data;
    }
}
