<?php

namespace IIYousign\Endpoint;

class DeleteConsentProcessById extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     *
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/consent_processes/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \IIYousign\Exception\DeleteConsentProcessByIdNotFoundException
     * @throws \IIYousign\Exception\DeleteConsentProcessByIdBadRequestException
     * @throws \IIYousign\Exception\DeleteConsentProcessByIdInternalServerErrorException
     * @throws \IIYousign\Exception\DeleteConsentProcessByIdUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\DeleteConsentProcessByIdNotFoundException($serializer->deserialize($body, 'IIYousign\\Model\\NotFound', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\DeleteConsentProcessByIdBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\BadRequest', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\DeleteConsentProcessByIdInternalServerErrorException($serializer->deserialize($body, 'IIYousign\\Model\\ServerError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\DeleteConsentProcessByIdUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\Unauthorized', 'json'));
        }
        if (204 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('ApiKey');
    }
}
