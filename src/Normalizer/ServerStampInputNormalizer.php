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

class ServerStampInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\ServerStampInput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\ServerStampInput';
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
        $object = new \IIYousign\Model\ServerStampInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($data['file']);
        }
        if (\array_key_exists('certificate', $data)) {
            $object->setCertificate($data['certificate']);
        }
        if (\array_key_exists('config', $data) && $data['config'] !== null) {
            $values = array();
            foreach ($data['config'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'IIYousign\\Model\\ServerStampConfig', 'json', $context);
            }
            $object->setConfig($values);
        } elseif (\array_key_exists('config', $data) && $data['config'] === null) {
            $object->setConfig(null);
        }
        if (\array_key_exists('fileObjects', $data)) {
            $values_1 = array();
            foreach ($data['fileObjects'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'IIYousign\\Model\\FileObjectInputWithoutFileReference', 'json', $context);
            }
            $object->setFileObjects($values_1);
        }
        if (\array_key_exists('signImage', $data) && $data['signImage'] !== null) {
            $object->setSignImage($data['signImage']);
        } elseif (\array_key_exists('signImage', $data) && $data['signImage'] === null) {
            $object->setSignImage(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['file'] = $object->getFile();
        $data['certificate'] = $object->getCertificate();
        if (null !== $object->getConfig()) {
            $values = array();
            foreach ($object->getConfig() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['config'] = $values;
        }
        $values_1 = array();
        foreach ($object->getFileObjects() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['fileObjects'] = $values_1;
        if (null !== $object->getSignImage()) {
            $data['signImage'] = $object->getSignImage();
        }
        return $data;
    }
}
