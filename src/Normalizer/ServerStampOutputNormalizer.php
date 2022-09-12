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

class ServerStampOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\ServerStampOutput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\ServerStampOutput';
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
        $object = new \IIYousign\Model\ServerStampOutput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($data['file']);
        }
        if (\array_key_exists('certificate', $data)) {
            $object->setCertificate($data['certificate']);
        }
        if (\array_key_exists('config', $data)) {
            $values = array();
            foreach ($data['config'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'IIYousign\\Model\\ServerStampConfig', 'json', $context);
            }
            $object->setConfig($values);
        }
        if (\array_key_exists('fileObjects', $data)) {
            $values_1 = array();
            foreach ($data['fileObjects'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'IIYousign\\Model\\FileObjectOutputWithoutFileReference', 'json', $context);
            }
            $object->setFileObjects($values_1);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updatedAt']));
        }
        if (\array_key_exists('finishedAt', $data)) {
            $object->setFinishedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['finishedAt']));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('workspace', $data)) {
            $object->setWorkspace($data['workspace']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
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
        $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['finishedAt'] = $object->getFinishedAt()->format('Y-m-d\\TH:i:sP');
        $data['status'] = $object->getStatus();
        $data['workspace'] = $object->getWorkspace();
        return $data;
    }
}
