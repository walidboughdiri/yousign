<?php

namespace IIYousign\Exception;

class GetConsentProcessValueByIdUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \IIYousign\Model\Unauthorized
     */
    private $unauthorized;
    public function __construct(\IIYousign\Model\Unauthorized $unauthorized)
    {
        parent::__construct('Unauthorized');
        $this->unauthorized = $unauthorized;
    }
    public function getUnauthorized(): \IIYousign\Model\Unauthorized
    {
        return $this->unauthorized;
    }
}
