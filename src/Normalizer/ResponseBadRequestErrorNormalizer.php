<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Normalizer;

use IIYousign\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ResponseBadRequestErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\ResponseBadRequestError';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\ResponseBadRequestError';
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \IIYousign\Model\ResponseBadRequestError();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('detail', $data)) {
            $object->setDetail($data['detail']);
        }
        if (\array_key_exists('invalid_params', $data)) {
            $values = [];
            foreach ($data['invalid_params'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'IIYousign\\Model\\ResponseBadRequestErrorInvalidParamsItem', 'json', $context);
            }
            $object->setInvalidParams($values);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getDetail()) {
            $data['detail'] = $object->getDetail();
        }
        if (null !== $object->getInvalidParams()) {
            $values = [];
            foreach ($object->getInvalidParams() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['invalid_params'] = $values;
        }

        return $data;
    }
}