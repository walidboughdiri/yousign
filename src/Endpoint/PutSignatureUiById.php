<?php

namespace IIYousign\Endpoint;

class PutSignatureUiById extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     *
     *
     * @param string $id
     * @param array $queryParameters {
     *     @var string $id id of signature ui to update
     * }
     */
    public function __construct(string $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/signature_uis/{id}');
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
        $optionsResolver->setDefined(array('id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \IIYousign\Exception\PutSignatureUiByIdNotFoundException
     * @throws \IIYousign\Exception\PutSignatureUiByIdBadRequestException
     * @throws \IIYousign\Exception\PutSignatureUiByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutSignatureUiByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\SignatureUiInputUpdate
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\PutSignatureUiByIdNotFoundException($serializer->deserialize($body, 'IIYousign\\Model\\NotFound', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\PutSignatureUiByIdBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\BadRequest', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PutSignatureUiByIdInternalServerErrorException($serializer->deserialize($body, 'IIYousign\\Model\\ServerError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PutSignatureUiByIdUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\Unauthorized', 'json'));
        }
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'IIYousign\\Model\\SignatureUiInputUpdate', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('ApiKey');
    }
}
