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

class UserOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\UserOutput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\UserOutput';
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
        $object = new \IIYousign\Model\UserOutput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
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
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
        } elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
            $object->setOrganization($data['organization']);
        } elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('workspaces', $data) && $data['workspaces'] !== null) {
            $values = array();
            foreach ($data['workspaces'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'IIYousign\\Model\\UserWorkspaceOutput', 'json', $context);
            }
            $object->setWorkspaces($values);
        } elseif (\array_key_exists('workspaces', $data) && $data['workspaces'] === null) {
            $object->setWorkspaces(null);
        }
        if (\array_key_exists('permission', $data) && $data['permission'] !== null) {
            $object->setPermission($data['permission']);
        } elseif (\array_key_exists('permission', $data) && $data['permission'] === null) {
            $object->setPermission(null);
        }
        if (\array_key_exists('group', $data)) {
            $object->setGroup($this->denormalizer->denormalize($data['group'], 'IIYousign\\Model\\UserGroup', 'json', $context));
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updatedAt']));
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('config', $data) && $data['config'] !== null) {
            $object->setConfig($this->denormalizer->denormalize($data['config'], 'IIYousign\\Model\\UserOutputConfig', 'json', $context));
        } elseif (\array_key_exists('config', $data) && $data['config'] === null) {
            $object->setConfig(null);
        }
        if (\array_key_exists('inweboUserRequest', $data) && $data['inweboUserRequest'] !== null) {
            $object->setInweboUserRequest($data['inweboUserRequest']);
        } elseif (\array_key_exists('inweboUserRequest', $data) && $data['inweboUserRequest'] === null) {
            $object->setInweboUserRequest(null);
        }
        if (\array_key_exists('samlNameId', $data) && $data['samlNameId'] !== null) {
            $object->setSamlNameId($data['samlNameId']);
        } elseif (\array_key_exists('samlNameId', $data) && $data['samlNameId'] === null) {
            $object->setSamlNameId(null);
        }
        if (\array_key_exists('defaultSignImage', $data) && $data['defaultSignImage'] !== null) {
            $object->setDefaultSignImage($data['defaultSignImage']);
        } elseif (\array_key_exists('defaultSignImage', $data) && $data['defaultSignImage'] === null) {
            $object->setDefaultSignImage(null);
        }
        if (\array_key_exists('notifications', $data) && $data['notifications'] !== null) {
            $object->setNotifications($this->denormalizer->denormalize($data['notifications'], 'IIYousign\\Model\\UserOutputNotifications', 'json', $context));
        } elseif (\array_key_exists('notifications', $data) && $data['notifications'] === null) {
            $object->setNotifications(null);
        }
        if (\array_key_exists('fastSign', $data)) {
            $object->setFastSign($data['fastSign']);
        }
        if (\array_key_exists('fullName', $data)) {
            $object->setFullName($data['fullName']);
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
        $data['firstname'] = $object->getFirstname();
        $data['lastname'] = $object->getLastname();
        $data['email'] = $object->getEmail();
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getWorkspaces()) {
            $values = array();
            foreach ($object->getWorkspaces() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['workspaces'] = $values;
        }
        if (null !== $object->getPermission()) {
            $data['permission'] = $object->getPermission();
        }
        if (null !== $object->getGroup()) {
            $data['group'] = $this->normalizer->normalize($object->getGroup(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getConfig()) {
            $data['config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getInweboUserRequest()) {
            $data['inweboUserRequest'] = $object->getInweboUserRequest();
        }
        if (null !== $object->getSamlNameId()) {
            $data['samlNameId'] = $object->getSamlNameId();
        }
        if (null !== $object->getDefaultSignImage()) {
            $data['defaultSignImage'] = $object->getDefaultSignImage();
        }
        if (null !== $object->getNotifications()) {
            $data['notifications'] = $this->normalizer->normalize($object->getNotifications(), 'json', $context);
        }
        if (null !== $object->getFastSign()) {
            $data['fastSign'] = $object->getFastSign();
        }
        if (null !== $object->getFullName()) {
            $data['fullName'] = $object->getFullName();
        }
        return $data;
    }
}
