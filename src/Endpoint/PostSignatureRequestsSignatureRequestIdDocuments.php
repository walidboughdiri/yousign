<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Endpoint;

class PostSignatureRequestsSignatureRequestIdDocuments extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    protected $signatureRequestId;

    /**
     * Add document to a signature request.
     *
     * @param string $signatureRequestId Signature Request Id
     */
    public function __construct(string $signatureRequestId, ?\IIYousign\Model\SignatureRequestsSignatureRequestIdDocumentsPostBody $requestBody = null)
    {
        $this->signatureRequestId = $signatureRequestId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{signatureRequestId}'], [$this->signatureRequestId], '/signature_requests/{signatureRequestId}/documents');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \IIYousign\Model\SignatureRequestsSignatureRequestIdDocumentsPostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }

            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '""')]], $bodyBuilder->build()];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @return \IIYousign\Model\Document
     *
     * @throws \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdDocumentsBadRequestException
     * @throws \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdDocumentsUnauthorizedException
     * @throws \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdDocumentsForbiddenException
     * @throws \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdDocumentsNotFoundException
     * @throws \IIYousign\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'IIYousign\\Model\\Document', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdDocumentsBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseBadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdDocumentsUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseUnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdDocumentsForbiddenException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdDocumentsNotFoundException();
        }
        throw new \IIYousign\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}