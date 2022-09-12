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

class ProcedureOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\ProcedureOutput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\ProcedureOutput';
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
        $object = new \IIYousign\Model\ProcedureOutput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updatedAt']));
        }
        if (\array_key_exists('expiresAt', $data) && $data['expiresAt'] !== null) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expiresAt']));
        } elseif (\array_key_exists('expiresAt', $data) && $data['expiresAt'] === null) {
            $object->setExpiresAt(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($data['creator']);
        } elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
        }
        if (\array_key_exists('creatorFirstName', $data) && $data['creatorFirstName'] !== null) {
            $object->setCreatorFirstName($data['creatorFirstName']);
        } elseif (\array_key_exists('creatorFirstName', $data) && $data['creatorFirstName'] === null) {
            $object->setCreatorFirstName(null);
        }
        if (\array_key_exists('creatorLastName', $data) && $data['creatorLastName'] !== null) {
            $object->setCreatorLastName($data['creatorLastName']);
        } elseif (\array_key_exists('creatorLastName', $data) && $data['creatorLastName'] === null) {
            $object->setCreatorLastName(null);
        }
        if (\array_key_exists('workspace', $data) && $data['workspace'] !== null) {
            $object->setWorkspace($data['workspace']);
        } elseif (\array_key_exists('workspace', $data) && $data['workspace'] === null) {
            $object->setWorkspace(null);
        }
        if (\array_key_exists('template', $data) && $data['template'] !== null) {
            $object->setTemplate($data['template']);
        } elseif (\array_key_exists('template', $data) && $data['template'] === null) {
            $object->setTemplate(null);
        }
        if (\array_key_exists('ordered', $data) && $data['ordered'] !== null) {
            $object->setOrdered($data['ordered']);
        } elseif (\array_key_exists('ordered', $data) && $data['ordered'] === null) {
            $object->setOrdered(null);
        }
        if (\array_key_exists('parent', $data) && $data['parent'] !== null) {
            $object->setParent($data['parent']);
        } elseif (\array_key_exists('parent', $data) && $data['parent'] === null) {
            $object->setParent(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'IIYousign\\Model\\ProcedureOutputMetadata', 'json', $context));
        } elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('config', $data)) {
            $object->setConfig($data['config']);
        }
        if (\array_key_exists('members', $data)) {
            $values = array();
            foreach ($data['members'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'IIYousign\\Model\\MemberOutput', 'json', $context);
            }
            $object->setMembers($values);
        }
        if (\array_key_exists('files', $data)) {
            $values_1 = array();
            foreach ($data['files'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'IIYousign\\Model\\FileOutput', 'json', $context);
            }
            $object->setFiles($values_1);
        }
        if (\array_key_exists('relatedFilesEnable', $data)) {
            $object->setRelatedFilesEnable($data['relatedFilesEnable']);
        }
        if (\array_key_exists('archive', $data)) {
            $object->setArchive($data['archive']);
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
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getExpiresAt()) {
            $data['expiresAt'] = $object->getExpiresAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $object->getCreator();
        }
        if (null !== $object->getCreatorFirstName()) {
            $data['creatorFirstName'] = $object->getCreatorFirstName();
        }
        if (null !== $object->getCreatorLastName()) {
            $data['creatorLastName'] = $object->getCreatorLastName();
        }
        if (null !== $object->getWorkspace()) {
            $data['workspace'] = $object->getWorkspace();
        }
        if (null !== $object->getTemplate()) {
            $data['template'] = $object->getTemplate();
        }
        if (null !== $object->getOrdered()) {
            $data['ordered'] = $object->getOrdered();
        }
        if (null !== $object->getParent()) {
            $data['parent'] = $object->getParent();
        }
        if (null !== $object->getMetadata()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        if (null !== $object->getConfig()) {
            $data['config'] = $object->getConfig();
        }
        if (null !== $object->getMembers()) {
            $values = array();
            foreach ($object->getMembers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['members'] = $values;
        }
        if (null !== $object->getFiles()) {
            $values_1 = array();
            foreach ($object->getFiles() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['files'] = $values_1;
        }
        if (null !== $object->getRelatedFilesEnable()) {
            $data['relatedFilesEnable'] = $object->getRelatedFilesEnable();
        }
        if (null !== $object->getArchive()) {
            $data['archive'] = $object->getArchive();
        }
        return $data;
    }
}
