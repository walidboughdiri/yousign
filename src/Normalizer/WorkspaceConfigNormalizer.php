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

class WorkspaceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\WorkspaceConfig';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\WorkspaceConfig';
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
        $object = new \IIYousign\Model\WorkspaceConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('authenticationModes', $data)) {
            $values = array();
            foreach ($data['authenticationModes'] as $value) {
                $values[] = $value;
            }
            $object->setAuthenticationModes($values);
        }
        if (\array_key_exists('procedure', $data)) {
            $object->setProcedure($this->denormalizer->denormalize($data['procedure'], 'IIYousign\\Model\\WorkspaceConfigProcedure', 'json', $context));
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($this->denormalizer->denormalize($data['email'], 'IIYousign\\Model\\WorkspaceConfigEmail', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAuthenticationModes()) {
            $values = array();
            foreach ($object->getAuthenticationModes() as $value) {
                $values[] = $value;
            }
            $data['authenticationModes'] = $values;
        }
        if (null !== $object->getProcedure()) {
            $data['procedure'] = $this->normalizer->normalize($object->getProcedure(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $this->normalizer->normalize($object->getEmail(), 'json', $context);
        }
        return $data;
    }
}
