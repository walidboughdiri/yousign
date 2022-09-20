<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Endpoint;

class GetSignersSignerIdAuditTrailsDownload extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    protected $signerId;
    protected $signatureRequestId;

    /**
     * Download audit trail PDF.
     *
     * @param string $signerId           Signer Id
     * @param string $signatureRequestId Signature request Id
     */
    public function __construct(string $signerId, string $signatureRequestId)
    {
        $this->signerId = $signerId;
        $this->signatureRequestId = $signatureRequestId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{signerId}', '{signatureRequestId}'], [$this->signerId, $this->signatureRequestId], '/signature_requests/{signatureRequestId}/signers/{signerId}/audit_trails/download');
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
     * @return
     *
     * @throws \IIYousign\Exception\GetSignersSignerIdAuditTrailsDownloadBadRequestException
     * @throws \IIYousign\Exception\GetSignersSignerIdAuditTrailsDownloadUnauthorizedException
     * @throws \IIYousign\Exception\GetSignersSignerIdAuditTrailsDownloadNotFoundException
     * @throws \IIYousign\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\GetSignersSignerIdAuditTrailsDownloadBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseBadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\GetSignersSignerIdAuditTrailsDownloadUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseUnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\GetSignersSignerIdAuditTrailsDownloadNotFoundException();
        }
        throw new \IIYousign\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
