<?php

namespace IIYousign\Exception;

class GetServerStampByIdBadRequestException extends BadRequestException
{
    /**
     * @var \IIYousign\Model\BadRequest
     */
    private $badRequest;
    public function __construct(\IIYousign\Model\BadRequest $badRequest)
    {
        parent::__construct('BadRequest');
        $this->badRequest = $badRequest;
    }
    public function getBadRequest(): \IIYousign\Model\BadRequest
    {
        return $this->badRequest;
    }
}
