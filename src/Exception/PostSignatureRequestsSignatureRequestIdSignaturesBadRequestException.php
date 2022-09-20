<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Exception;

class PostSignatureRequestsSignatureRequestIdSignaturesBadRequestException extends BadRequestException
{
    /**
     * @var \IIYousign\Model\ResponseBadRequestError
     */
    private $responseBadRequestError;

    public function __construct(\IIYousign\Model\ResponseBadRequestError $responseBadRequestError)
    {
        parent::__construct('Bad request');
        $this->responseBadRequestError = $responseBadRequestError;
    }

    public function getResponseBadRequestError(): \IIYousign\Model\ResponseBadRequestError
    {
        return $this->responseBadRequestError;
    }
}
