<?php

namespace IIYousign\Endpoint;

class GetSignatureUiLabels extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    /**
     * Only usefull if you use a filter with name or signatureUI
     *
     * @param array $queryParameters {
     *     @var string $name Filtering on name of signature ui labels
     *     @var string $signatureUi Filtering on id of signature ui resource
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/signature_ui_labels';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('name', 'signatureUi'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('signatureUi', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \IIYousign\Exception\GetSignatureUiLabelsNotFoundException
     * @throws \IIYousign\Exception\GetSignatureUiLabelsBadRequestException
     * @throws \IIYousign\Exception\GetSignatureUiLabelsInternalServerErrorException
     * @throws \IIYousign\Exception\GetSignatureUiLabelsUnauthorizedException
     *
     * @return null|\IIYousign\Model\SignatureUiLabelOutput[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\GetSignatureUiLabelsNotFoundException($serializer->deserialize($body, 'IIYousign\\Model\\NotFound', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\GetSignatureUiLabelsBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\BadRequest', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\GetSignatureUiLabelsInternalServerErrorException($serializer->deserialize($body, 'IIYousign\\Model\\ServerError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\GetSignatureUiLabelsUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\Unauthorized', 'json'));
        }
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'IIYousign\\Model\\SignatureUiLabelOutput[]', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('ApiKey');
    }
}
