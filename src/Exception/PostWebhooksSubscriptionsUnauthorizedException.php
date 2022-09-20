<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace IIYousign\Exception;

class PostWebhooksSubscriptionsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \IIYousign\Model\ResponseUnauthorizedError
     */
    private $responseUnauthorizedError;

    public function __construct(\IIYousign\Model\ResponseUnauthorizedError $responseUnauthorizedError)
    {
        parent::__construct('Access unauthorized');
        $this->responseUnauthorizedError = $responseUnauthorizedError;
    }

    public function getResponseUnauthorizedError(): \IIYousign\Model\ResponseUnauthorizedError
    {
        return $this->responseUnauthorizedError;
    }
}
