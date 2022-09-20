<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Endpoint;

class PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder extends \IIYousign\Runtime\Client\BaseEndpoint implements \IIYousign\Runtime\Client\Endpoint
{
    use \IIYousign\Runtime\Client\EndpointTrait;
    protected $signerId;
    protected $signatureRequestId;

    /**
     * Send manual reminder to signer.
     *
     * @param string $signerId           Signer id
     * @param string $signatureRequestId Signature request id
     */
    public function __construct(string $signerId, string $signatureRequestId)
    {
        $this->signerId = $signerId;
        $this->signatureRequestId = $signatureRequestId;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{signerId}', '{signatureRequestId}'], [$this->signerId, $this->signatureRequestId], '/signature_requests/{signatureRequestId}/signers/{signerId}/send_reminder');
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
     * @throws \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminderBadRequestException
     * @throws \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminderUnauthorizedException
     * @throws \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminderForbiddenException
     * @throws \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminderNotFoundException
     * @throws \IIYousign\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminderBadRequestException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseBadRequestError', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminderUnauthorizedException($serializer->deserialize($body, 'IIYousign\\Model\\ResponseUnauthorizedError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminderForbiddenException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \IIYousign\Exception\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminderNotFoundException();
        }
        throw new \IIYousign\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
