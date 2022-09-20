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

class SignatureRequestsSignatureRequestIdSignersSignerIdPatchBodyCustomTextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\SignatureRequestsSignatureRequestIdSignersSignerIdPatchBodyCustomText';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\SignatureRequestsSignatureRequestIdSignersSignerIdPatchBodyCustomText';
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
        $object = new \IIYousign\Model\SignatureRequestsSignatureRequestIdSignersSignerIdPatchBodyCustomText();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('request_subject', $data) && $data['request_subject'] !== null) {
            $object->setRequestSubject($data['request_subject']);
        } elseif (\array_key_exists('request_subject', $data) && $data['request_subject'] === null) {
            $object->setRequestSubject(null);
        }
        if (\array_key_exists('request_body', $data) && $data['request_body'] !== null) {
            $object->setRequestBody($data['request_body']);
        } elseif (\array_key_exists('request_body', $data) && $data['request_body'] === null) {
            $object->setRequestBody(null);
        }
        if (\array_key_exists('reminder_subject', $data) && $data['reminder_subject'] !== null) {
            $object->setReminderSubject($data['reminder_subject']);
        } elseif (\array_key_exists('reminder_subject', $data) && $data['reminder_subject'] === null) {
            $object->setReminderSubject(null);
        }
        if (\array_key_exists('reminder_body', $data) && $data['reminder_body'] !== null) {
            $object->setReminderBody($data['reminder_body']);
        } elseif (\array_key_exists('reminder_body', $data) && $data['reminder_body'] === null) {
            $object->setReminderBody(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getRequestSubject()) {
            $data['request_subject'] = $object->getRequestSubject();
        }
        if (null !== $object->getRequestBody()) {
            $data['request_body'] = $object->getRequestBody();
        }
        if (null !== $object->getReminderSubject()) {
            $data['reminder_subject'] = $object->getReminderSubject();
        }
        if (null !== $object->getReminderBody()) {
            $data['reminder_body'] = $object->getReminderBody();
        }

        return $data;
    }
}