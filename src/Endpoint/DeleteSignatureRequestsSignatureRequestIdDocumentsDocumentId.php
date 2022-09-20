<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Endpoint;

class DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentId extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    protected $signatureRequestId;
    protected $documentId;

    /**
     * Delete a document.
     *
     * @param string $signatureRequestId Signature request Id
     * @param string $documentId         Document Id
     */
    public function __construct(string $signatureRequestId, string $documentId)
    {
        $this->signatureRequestId = $signatureRequestId;
        $this->documentId = $documentId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{signatureRequestId}', '{documentId}'], [$this->signatureRequestId, $this->documentId], '/signature_requests/{signatureRequestId}/documents/{documentId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @return null
     *
     * @throws \IIYousign\Exception\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdBadRequestException
     * @throws \IIYousign\Exception\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdUnauthorizedException
     * @throws \IIYousign\Exception\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdForbiddenException
     * @throws \IIYousign\Exception\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdNotFoundException
     * @throws \IIYousign\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseBadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseUnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdForbiddenException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdNotFoundException();
        }
        throw new \IIYousign\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}