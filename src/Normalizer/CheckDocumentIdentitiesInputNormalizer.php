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

class CheckDocumentIdentitiesInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\CheckDocumentIdentitiesInput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\CheckDocumentIdentitiesInput';
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
        $object = new \IIYousign\Model\CheckDocumentIdentitiesInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($data['file']);
        }
        if (\array_key_exists('firstNames', $data)) {
            $values = array();
            foreach ($data['firstNames'] as $value) {
                $values[] = $value;
            }
            $object->setFirstNames($values);
        }
        if (\array_key_exists('birthName', $data)) {
            $object->setBirthName($data['birthName']);
        }
        if (\array_key_exists('birthDate', $data)) {
            $object->setBirthDate(\DateTime::createFromFormat('Y-m-d', $data['birthDate'])->setTime(0, 0, 0));
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
        if (null !== $object->getFirstNames()) {
            $values = array();
            foreach ($object->getFirstNames() as $value) {
                $values[] = $value;
            }
            $data['firstNames'] = $values;
        }
        if (null !== $object->getBirthName()) {
            $data['birthName'] = $object->getBirthName();
        }
        if (null !== $object->getBirthDate()) {
            $data['birthDate'] = $object->getBirthDate()->format('Y-m-d');
        }
        return $data;
    }
}
