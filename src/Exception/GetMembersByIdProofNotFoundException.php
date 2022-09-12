<?php

namespace IIYousign\Exception;

class GetMembersByIdProofNotFoundException extends NotFoundException
{
    /**
     * @var \IIYousign\Model\NotFound
     */
    private $notFound;
    public function __construct(\IIYousign\Model\NotFound $notFound)
    {
        parent::__construct('BadRequest');
        $this->notFound = $notFound;
    }
    public function getNotFound(): \IIYousign\Model\NotFound
    {
        return $this->notFound;
    }
}
