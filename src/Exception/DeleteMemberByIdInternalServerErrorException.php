<?php

namespace IIYousign\Exception;

class DeleteMemberByIdInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \IIYousign\Model\ServerError
     */
    private $serverError;
    public function __construct(\IIYousign\Model\ServerError $serverError)
    {
        parent::__construct('ServerError');
        $this->serverError = $serverError;
    }
    public function getServerError(): \IIYousign\Model\ServerError
    {
        return $this->serverError;
    }
}
