<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Endpoint;

class PostDocuments extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;

    /**
     * Upload a document.
     */
    public function __construct(?\IIYousign\Model\UploadDocumentInput $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/documents';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \IIYousign\Model\UploadDocumentInput) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                if('file' === $key) {
                    $bodyBuilder->addResource($key . '"; filename="test-'.time().'.pdf"', $value);
                } else {
                    $bodyBuilder->addResource($key, $value);
                }
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
     * @throws \IIYousign\Exception\PostDocumentsBadRequestException
     * @throws \IIYousign\Exception\PostDocumentsUnauthorizedException
     * @throws \IIYousign\Exception\PostDocumentsForbiddenException
     * @throws \IIYousign\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'IIYousign\\Model\\Document', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostDocumentsBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseBadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostDocumentsUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseUnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostDocumentsForbiddenException();
        }
        throw new \IIYousign\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}