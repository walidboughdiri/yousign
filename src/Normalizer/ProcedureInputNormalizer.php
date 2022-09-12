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

class ProcedureInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\ProcedureInput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\ProcedureInput';
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
        $object = new \IIYousign\Model\ProcedureInput();
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
        if (\array_key_exists('expiresAt', $data) && $data['expiresAt'] !== null) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d', $data['expiresAt'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('expiresAt', $data) && $data['expiresAt'] === null) {
            $object->setExpiresAt(null);
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
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'IIYousign\\Model\\ProcedureInputMetadata', 'json', $context));
        } elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('config', $data) && $data['config'] !== null) {
            $object->setConfig($this->denormalizer->denormalize($data['config'], 'IIYousign\\Model\\ProcedureConfig', 'json', $context));
        } elseif (\array_key_exists('config', $data) && $data['config'] === null) {
            $object->setConfig(null);
        }
        if (\array_key_exists('members', $data) && $data['members'] !== null) {
            $values = array();
            foreach ($data['members'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'IIYousign\\Model\\MemberInput', 'json', $context);
            }
            $object->setMembers($values);
        } elseif (\array_key_exists('members', $data) && $data['members'] === null) {
            $object->setMembers(null);
        }
        if (\array_key_exists('start', $data) && $data['start'] !== null) {
            $object->setStart($data['start']);
        } elseif (\array_key_exists('start', $data) && $data['start'] === null) {
            $object->setStart(null);
        }
        if (\array_key_exists('archive', $data) && $data['archive'] !== null) {
            $object->setArchive($data['archive']);
        } elseif (\array_key_exists('archive', $data) && $data['archive'] === null) {
            $object->setArchive(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getExpiresAt()) {
            $data['expiresAt'] = $object->getExpiresAt()->format('Y-m-d');
        }
        if (null !== $object->getTemplate()) {
            $data['template'] = $object->getTemplate();
        }
        if (null !== $object->getOrdered()) {
            $data['ordered'] = $object->getOrdered();
        }
        if (null !== $object->getMetadata()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        if (null !== $object->getConfig()) {
            $data['config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getMembers()) {
            $values = array();
            foreach ($object->getMembers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['members'] = $values;
        }
        if (null !== $object->getStart()) {
            $data['start'] = $object->getStart();
        }
        if (null !== $object->getArchive()) {
            $data['archive'] = $object->getArchive();
        }
        return $data;
    }
}
