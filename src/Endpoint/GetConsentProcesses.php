<?php

namespace IIYousign\Endpoint;

class GetConsentProcesses extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $member id of member (required for anonymous)
     *     @var string $procedure id of procedure (required if the member attribut is not set)
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
        return '/consent_processes';
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
        $optionsResolver->setDefined(array('member', 'procedure'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('member', array('string'));
        $optionsResolver->setAllowedTypes('procedure', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \IIYousign\Exception\GetConsentProcessesNotFoundException
     * @throws \IIYousign\Exception\GetConsentProcessesBadRequestException
     * @throws \IIYousign\Exception\GetConsentProcessesInternalServerErrorException
     * @throws \IIYousign\Exception\GetConsentProcessesUnauthorizedException
     *
     * @return null|\IIYousign\Model\ConsentProcessOutput[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\GetConsentProcessesNotFoundException($serializer->deserialize($body, 'IIYousign\\Model\\NotFound', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\GetConsentProcessesBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\BadRequest', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\GetConsentProcessesInternalServerErrorException($serializer->deserialize($body, 'IIYousign\\Model\\ServerError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\GetConsentProcessesUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\Unauthorized', 'json'));
        }
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'IIYousign\\Model\\ConsentProcessOutput[]', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('ApiKey');
    }
}
