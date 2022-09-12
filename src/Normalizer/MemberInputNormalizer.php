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

class MemberInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\MemberInput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\MemberInput';
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
        $object = new \IIYousign\Model\MemberInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($data['user']);
        } elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('firstname', $data)) {
            $object->setFirstname($data['firstname']);
        }
        if (\array_key_exists('lastname', $data)) {
            $object->setLastname($data['lastname']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        } elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('fileObjects', $data) && $data['fileObjects'] !== null) {
            $values = array();
            foreach ($data['fileObjects'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'IIYousign\\Model\\FileObjectInput', 'json', $context);
            }
            $object->setFileObjects($values);
        } elseif (\array_key_exists('fileObjects', $data) && $data['fileObjects'] === null) {
            $object->setFileObjects(null);
        }
        if (\array_key_exists('procedure', $data) && $data['procedure'] !== null) {
            $object->setProcedure($data['procedure']);
        } elseif (\array_key_exists('procedure', $data) && $data['procedure'] === null) {
            $object->setProcedure(null);
        }
        if (\array_key_exists('operationLevel', $data) && $data['operationLevel'] !== null) {
            $object->setOperationLevel($data['operationLevel']);
        } elseif (\array_key_exists('operationLevel', $data) && $data['operationLevel'] === null) {
            $object->setOperationLevel(null);
        }
        if (\array_key_exists('operationCustomModes', $data) && $data['operationCustomModes'] !== null) {
            $values_1 = array();
            foreach ($data['operationCustomModes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setOperationCustomModes($values_1);
        } elseif (\array_key_exists('operationCustomModes', $data) && $data['operationCustomModes'] === null) {
            $object->setOperationCustomModes(null);
        }
        if (\array_key_exists('operationModeSmsConfig', $data)) {
            $object->setOperationModeSmsConfig($data['operationModeSmsConfig']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getFirstname()) {
            $data['firstname'] = $object->getFirstname();
        }
        if (null !== $object->getLastname()) {
            $data['lastname'] = $object->getLastname();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if (null !== $object->getFileObjects()) {
            $values = array();
            foreach ($object->getFileObjects() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['fileObjects'] = $values;
        }
        if (null !== $object->getProcedure()) {
            $data['procedure'] = $object->getProcedure();
        }
        if (null !== $object->getOperationLevel()) {
            $data['operationLevel'] = $object->getOperationLevel();
        }
        if (null !== $object->getOperationCustomModes()) {
            $values_1 = array();
            foreach ($object->getOperationCustomModes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['operationCustomModes'] = $values_1;
        }
        if (null !== $object->getOperationModeSmsConfig()) {
            $data['operationModeSmsConfig'] = $object->getOperationModeSmsConfig();
        }
        return $data;
    }
}
