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

class CheckDocumentIdentitiesOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\CheckDocumentIdentitiesOutput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\CheckDocumentIdentitiesOutput';
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
        $object = new \IIYousign\Model\CheckDocumentIdentitiesOutput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updatedAt']));
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
        if (\array_key_exists('workspace', $data)) {
            $object->setWorkspace($data['workspace']);
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($data['creator']);
        }
        if (\array_key_exists('documentType', $data)) {
            $object->setDocumentType($data['documentType']);
        }
        if (\array_key_exists('extractedFirstNames', $data)) {
            $values_1 = array();
            foreach ($data['extractedFirstNames'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExtractedFirstNames($values_1);
        }
        if (\array_key_exists('extractedBirthName', $data)) {
            $object->setExtractedBirthName($data['extractedBirthName']);
        }
        if (\array_key_exists('extractedBirthDate', $data)) {
            $object->setExtractedBirthDate(\DateTime::createFromFormat('Y-m-d', $data['extractedBirthDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('extractedGender', $data)) {
            $object->setExtractedGender($data['extractedGender']);
        }
        if (\array_key_exists('extractedIssuanceDate', $data)) {
            $object->setExtractedIssuanceDate(\DateTime::createFromFormat('Y-m-d', $data['extractedIssuanceDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('extractedExpirationDate', $data)) {
            $object->setExtractedExpirationDate(\DateTime::createFromFormat('Y-m-d', $data['extractedExpirationDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('extractedMrz', $data)) {
            $values_2 = array();
            foreach ($data['extractedMrz'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setExtractedMrz($values_2);
        }
        if (\array_key_exists('firstNameValid', $data)) {
            $object->setFirstNameValid($data['firstNameValid']);
        }
        if (\array_key_exists('birthNameValid', $data)) {
            $object->setBirthNameValid($data['birthNameValid']);
        }
        if (\array_key_exists('mrzValid', $data)) {
            $object->setMrzValid($data['mrzValid']);
        }
        if (\array_key_exists('expired', $data)) {
            $object->setExpired($data['expired']);
        }
        if (\array_key_exists('valid', $data)) {
            $object->setValid($data['valid']);
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
        if (null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
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
        if (null !== $object->getWorkspace()) {
            $data['workspace'] = $object->getWorkspace();
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $object->getCreator();
        }
        if (null !== $object->getDocumentType()) {
            $data['documentType'] = $object->getDocumentType();
        }
        if (null !== $object->getExtractedFirstNames()) {
            $values_1 = array();
            foreach ($object->getExtractedFirstNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['extractedFirstNames'] = $values_1;
        }
        if (null !== $object->getExtractedBirthName()) {
            $data['extractedBirthName'] = $object->getExtractedBirthName();
        }
        if (null !== $object->getExtractedBirthDate()) {
            $data['extractedBirthDate'] = $object->getExtractedBirthDate()->format('Y-m-d');
        }
        if (null !== $object->getExtractedGender()) {
            $data['extractedGender'] = $object->getExtractedGender();
        }
        if (null !== $object->getExtractedIssuanceDate()) {
            $data['extractedIssuanceDate'] = $object->getExtractedIssuanceDate()->format('Y-m-d');
        }
        if (null !== $object->getExtractedExpirationDate()) {
            $data['extractedExpirationDate'] = $object->getExtractedExpirationDate()->format('Y-m-d');
        }
        if (null !== $object->getExtractedMrz()) {
            $values_2 = array();
            foreach ($object->getExtractedMrz() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['extractedMrz'] = $values_2;
        }
        if (null !== $object->getFirstNameValid()) {
            $data['firstNameValid'] = $object->getFirstNameValid();
        }
        if (null !== $object->getBirthNameValid()) {
            $data['birthNameValid'] = $object->getBirthNameValid();
        }
        if (null !== $object->getMrzValid()) {
            $data['mrzValid'] = $object->getMrzValid();
        }
        if (null !== $object->getExpired()) {
            $data['expired'] = $object->getExpired();
        }
        if (null !== $object->getValid()) {
            $data['valid'] = $object->getValid();
        }
        return $data;
    }
}
