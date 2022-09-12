<?php

namespace IIYousign\Endpoint;

class GetExportProcedure extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    /**
    *
    *
    * @param array $queryParameters {
    *     @var string $status Return Procedure list based on the status for each Procedure
    *     @var string $name Filter by name (contains)
    *     @var string $members.firstname Filter by member firstname (contains)
    *     @var string $members.lastname Filter by member lastname (contains)
    *     @var string $members.phone Filter by member phone (contains)
    *     @var string $members.email Filter by member email (contains)
    *     @var string $files.name Filter by file name (contains)
    *     @var array $createdAt Filter by creation date

    createdAt[after]=2017-09-18
    createdAt[before]=2017-09-18
    createdAt[strictly_after]=2017-09-18
    createdAt[strictly_before]=2017-09-18
    *     @var array $updatedAt Filter by update date

    updatedAt[after]=2017-09-18
    updatedAt[before]=2017-09-18
    updatedAt[strictly_after]=2017-09-18
    updatedAt[strictly_before]=2017-09-18
    *     @var array $expiresAt Filter by expire date

    expiresAt[after]=2017-09-18
    expiresAt[before]=2017-09-18
    expiresAt[strictly_after]=2017-09-18
    expiresAt[strictly_before]=2017-09-18
    *     @var string $order[createdAt] Order by attribut
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
        return '/export/procedures';
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
        $optionsResolver->setDefined(array('status', 'name', 'members.firstname', 'members.lastname', 'members.phone', 'members.email', 'files.name', 'createdAt', 'updatedAt', 'expiresAt', 'order[createdAt]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('members.firstname', array('string'));
        $optionsResolver->setAllowedTypes('members.lastname', array('string'));
        $optionsResolver->setAllowedTypes('members.phone', array('string'));
        $optionsResolver->setAllowedTypes('members.email', array('string'));
        $optionsResolver->setAllowedTypes('files.name', array('string'));
        $optionsResolver->setAllowedTypes('createdAt', array('array'));
        $optionsResolver->setAllowedTypes('updatedAt', array('array'));
        $optionsResolver->setAllowedTypes('expiresAt', array('array'));
        $optionsResolver->setAllowedTypes('order[createdAt]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \IIYousign\Exception\GetExportProcedureNotFoundException
     * @throws \IIYousign\Exception\GetExportProcedureBadRequestException
     * @throws \IIYousign\Exception\GetExportProcedureInternalServerErrorException
     * @throws \IIYousign\Exception\GetExportProcedureUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\GetExportProcedureNotFoundException($serializer->deserialize($body, 'IIYousign\\Model\\NotFound', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\GetExportProcedureBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\BadRequest', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\GetExportProcedureInternalServerErrorException($serializer->deserialize($body, 'IIYousign\\Model\\ServerError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\GetExportProcedureUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\Unauthorized', 'json'));
        }
        if (200 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('ApiKey');
    }
}
