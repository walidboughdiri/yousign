<?php

namespace IIYousign\Endpoint;

class PostProceduresByIdDuplicate extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\ProcedureDuplicateInput $requestBody
     */
    public function __construct(string $id, \IIYousign\Model\ProcedureDuplicateInput $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/procedures/{id}/duplicate');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \IIYousign\Model\ProcedureDuplicateInput) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \IIYousign\Exception\PostProceduresByIdDuplicateNotFoundException
     * @throws \IIYousign\Exception\PostProceduresByIdDuplicateBadRequestException
     * @throws \IIYousign\Exception\PostProceduresByIdDuplicateInternalServerErrorException
     * @throws \IIYousign\Exception\PostProceduresByIdDuplicateUnauthorizedException
     *
     * @return null|\IIYousign\Model\ProcedureOutput
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\PostProceduresByIdDuplicateNotFoundException($serializer->deserialize($body, 'IIYousign\\Model\\NotFound', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \IIYousign\Exception\PostProceduresByIdDuplicateBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\BadRequest', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostProceduresByIdDuplicateInternalServerErrorException($serializer->deserialize($body, 'IIYousign\\Model\\ServerError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostProceduresByIdDuplicateUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\Unauthorized', 'json'));
        }
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'IIYousign\\Model\\ProcedureOutput', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('ApiKey');
    }
}
