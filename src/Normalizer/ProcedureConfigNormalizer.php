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

class ProcedureConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\ProcedureConfig';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\ProcedureConfig';
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
        $object = new \IIYousign\Model\ProcedureConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('reminders', $data) && $data['reminders'] !== null) {
            $values = array();
            foreach ($data['reminders'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'IIYousign\\Model\\ProcedureConfigReminder', 'json', $context);
            }
            $object->setReminders($values);
        } elseif (\array_key_exists('reminders', $data) && $data['reminders'] === null) {
            $object->setReminders(null);
        }
        if (\array_key_exists('webhook', $data)) {
            $object->setWebhook($this->denormalizer->denormalize($data['webhook'], 'IIYousign\\Model\\ProcedureConfigWebhook', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getReminders()) {
            $values = array();
            foreach ($object->getReminders() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['reminders'] = $values;
        }
        if (null !== $object->getWebhook()) {
            $data['webhook'] = $this->normalizer->normalize($object->getWebhook(), 'json', $context);
        }
        return $data;
    }
}
