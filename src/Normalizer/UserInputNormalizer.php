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

class UserInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\UserInput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\UserInput';
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
        $object = new \IIYousign\Model\UserInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('permission', $data) && $data['permission'] !== null) {
            $object->setPermission($data['permission']);
        } elseif (\array_key_exists('permission', $data) && $data['permission'] === null) {
            $object->setPermission(null);
        }
        if (\array_key_exists('group', $data) && $data['group'] !== null) {
            $object->setGroup($data['group']);
        } elseif (\array_key_exists('group', $data) && $data['group'] === null) {
            $object->setGroup(null);
        }
        if (\array_key_exists('config', $data) && $data['config'] !== null) {
            $object->setConfig($this->denormalizer->denormalize($data['config'], 'IIYousign\\Model\\UserInputConfig', 'json', $context));
        } elseif (\array_key_exists('config', $data) && $data['config'] === null) {
            $object->setConfig(null);
        }
        if (\array_key_exists('defaultSignImage', $data) && $data['defaultSignImage'] !== null) {
            $object->setDefaultSignImage($data['defaultSignImage']);
        } elseif (\array_key_exists('defaultSignImage', $data) && $data['defaultSignImage'] === null) {
            $object->setDefaultSignImage(null);
        }
        if (\array_key_exists('notifications', $data) && $data['notifications'] !== null) {
            $object->setNotifications($this->denormalizer->denormalize($data['notifications'], 'IIYousign\\Model\\UserInputNotifications', 'json', $context));
        } elseif (\array_key_exists('notifications', $data) && $data['notifications'] === null) {
            $object->setNotifications(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['firstname'] = $object->getFirstname();
        $data['lastname'] = $object->getLastname();
        $data['email'] = $object->getEmail();
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getPermission()) {
            $data['permission'] = $object->getPermission();
        }
        if (null !== $object->getGroup()) {
            $data['group'] = $object->getGroup();
        }
        if (null !== $object->getConfig()) {
            $data['config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getDefaultSignImage()) {
            $data['defaultSignImage'] = $object->getDefaultSignImage();
        }
        if (null !== $object->getNotifications()) {
            $data['notifications'] = $this->normalizer->normalize($object->getNotifications(), 'json', $context);
        }
        return $data;
    }
}
