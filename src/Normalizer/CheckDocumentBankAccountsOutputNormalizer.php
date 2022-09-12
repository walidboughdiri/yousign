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

class CheckDocumentBankAccountsOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'IIYousign\\Model\\CheckDocumentBankAccountsOutput';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'IIYousign\\Model\\CheckDocumentBankAccountsOutput';
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
        $object = new \IIYousign\Model\CheckDocumentBankAccountsOutput();
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
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('birthName', $data)) {
            $object->setBirthName($data['birthName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('iban', $data)) {
            $object->setIban($data['iban']);
        }
        if (\array_key_exists('companyName', $data)) {
            $object->setCompanyName($data['companyName']);
        }
        if (\array_key_exists('documentType', $data)) {
            $object->setDocumentType($data['documentType']);
        }
        if (\array_key_exists('workspace', $data)) {
            $object->setWorkspace($data['workspace']);
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($data['creator']);
        }
        if (\array_key_exists('extractedIban', $data)) {
            $object->setExtractedIban($data['extractedIban']);
        }
        if (\array_key_exists('firstNameValid', $data)) {
            $object->setFirstNameValid($data['firstNameValid']);
        }
        if (\array_key_exists('birthNameValid', $data)) {
            $object->setBirthNameValid($data['birthNameValid']);
        }
        if (\array_key_exists('lastNameValid', $data)) {
            $object->setLastNameValid($data['lastNameValid']);
        }
        if (\array_key_exists('companyNameValid', $data)) {
            $object->setCompanyNameValid($data['companyNameValid']);
        }
        if (\array_key_exists('ibanValid', $data)) {
            $object->setIbanValid($data['ibanValid']);
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
        if (null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if (null !== $object->getBirthName()) {
            $data['birthName'] = $object->getBirthName();
        }
        if (null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        if (null !== $object->getIban()) {
            $data['iban'] = $object->getIban();
        }
        if (null !== $object->getCompanyName()) {
            $data['companyName'] = $object->getCompanyName();
        }
        if (null !== $object->getDocumentType()) {
            $data['documentType'] = $object->getDocumentType();
        }
        if (null !== $object->getWorkspace()) {
            $data['workspace'] = $object->getWorkspace();
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $object->getCreator();
        }
        if (null !== $object->getExtractedIban()) {
            $data['extractedIban'] = $object->getExtractedIban();
        }
        if (null !== $object->getFirstNameValid()) {
            $data['firstNameValid'] = $object->getFirstNameValid();
        }
        if (null !== $object->getBirthNameValid()) {
            $data['birthNameValid'] = $object->getBirthNameValid();
        }
        if (null !== $object->getLastNameValid()) {
            $data['lastNameValid'] = $object->getLastNameValid();
        }
        if (null !== $object->getCompanyNameValid()) {
            $data['companyNameValid'] = $object->getCompanyNameValid();
        }
        if (null !== $object->getIbanValid()) {
            $data['ibanValid'] = $object->getIbanValid();
        }
        return $data;
    }
}
