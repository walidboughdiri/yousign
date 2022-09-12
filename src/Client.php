<?php

namespace IIYousign;

use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Message\Authentication\Bearer;

class Client extends \IIYousign\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetOrganizationsNotFoundException
     * @throws \IIYousign\Exception\GetOrganizationsBadRequestException
     * @throws \IIYousign\Exception\GetOrganizationsUnauthorizedException
     * @throws \IIYousign\Exception\GetOrganizationsInternalServerErrorException
     *
     * @return null|\IIYousign\Model\OrganizationOutput[]|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganizations(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetOrganizations(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetWorkspacesNotFoundException
     * @throws \IIYousign\Exception\GetWorkspacesBadRequestException
     * @throws \IIYousign\Exception\GetWorkspacesUnauthorizedException
     * @throws \IIYousign\Exception\GetWorkspacesInternalServerErrorException
     *
     * @return null|\IIYousign\Model\WorkspaceOutput[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkspaces(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetWorkspaces(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetUsersNotFoundException
     * @throws \IIYousign\Exception\GetUsersBadRequestException
     * @throws \IIYousign\Exception\GetUsersInternalServerErrorException
     * @throws \IIYousign\Exception\GetUsersUnauthorizedException
     *
     * @return null|\IIYousign\Model\UserOutput[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUsers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetUsers(), $fetch);
    }
    /**
     *
     *
     * @param \IIYousign\Model\UserInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostUserNotFoundException
     * @throws \IIYousign\Exception\PostUserBadRequestException
     * @throws \IIYousign\Exception\PostUserInternalServerErrorException
     * @throws \IIYousign\Exception\PostUserUnauthorizedException
     *
     * @return null|\IIYousign\Model\UserOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postUser(\IIYousign\Model\UserInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostUser($requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\DeleteUserByIdNotFoundException
     * @throws \IIYousign\Exception\DeleteUserByIdBadRequestException
     * @throws \IIYousign\Exception\DeleteUserByIdInternalServerErrorException
     * @throws \IIYousign\Exception\DeleteUserByIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\DeleteUserById($id), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetUserByIdNotFoundException
     * @throws \IIYousign\Exception\GetUserByIdBadRequestException
     * @throws \IIYousign\Exception\GetUserByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetUserByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\UserOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getUserById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetUserById($id), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\UserInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutUserByIdNotFoundException
     * @throws \IIYousign\Exception\PutUserByIdBadRequestException
     * @throws \IIYousign\Exception\PutUserByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutUserByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\UserOutput|\Psr\Http\Message\ResponseInterface
     */
    public function putUserById(string $id, \IIYousign\Model\UserInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutUserById($id, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetUserGroupsNotFoundException
     * @throws \IIYousign\Exception\GetUserGroupsBadRequestException
     * @throws \IIYousign\Exception\GetUserGroupsInternalServerErrorException
     * @throws \IIYousign\Exception\GetUserGroupsUnauthorizedException
     *
     * @return null|\IIYousign\Model\UserGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUserGroups(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetUserGroups(), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetUserGroupByIdNotFoundException
     * @throws \IIYousign\Exception\GetUserGroupByIdBadRequestException
     * @throws \IIYousign\Exception\GetUserGroupByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetUserGroupByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\UserGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getUserGroupById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetUserGroupById($id), $fetch);
    }
    /**
     * Used to upload a file in base64 on our platform
     *
     * @param \IIYousign\Model\FileInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostFileNotFoundException
     * @throws \IIYousign\Exception\PostFileBadRequestException
     * @throws \IIYousign\Exception\PostFileInternalServerErrorException
     * @throws \IIYousign\Exception\PostFileUnauthorizedException
     *
     * @return null|\IIYousign\Model\FileOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postFile(\IIYousign\Model\FileInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostFile($requestBody), $fetch);
    }
    /**
     * Returns all the information regarding the File but without its content (for performance issue).
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetFileByIdNotFoundException
     * @throws \IIYousign\Exception\GetFileByIdBadRequestException
     * @throws \IIYousign\Exception\GetFileByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetFileByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\FileOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getFileById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetFileById($id), $fetch);
    }
    /**
     * Used to get the base64 content of a file
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetFilesByIdDownloadNotFoundException
     * @throws \IIYousign\Exception\GetFilesByIdDownloadBadRequestException
     * @throws \IIYousign\Exception\GetFilesByIdDownloadInternalServerErrorException
     * @throws \IIYousign\Exception\GetFilesByIdDownloadUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getFilesByIdDownload(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetFilesByIdDownload($id), $fetch);
    }
    /**
     * Duplicate a file. It will be create a clone of this file, with a new ID.
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostFilesByIdDuplicateNotFoundException
     * @throws \IIYousign\Exception\PostFilesByIdDuplicateBadRequestException
     * @throws \IIYousign\Exception\PostFilesByIdDuplicateInternalServerErrorException
     * @throws \IIYousign\Exception\PostFilesByIdDuplicateUnauthorizedException
     *
     * @return null|\IIYousign\Model\FileOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postFilesByIdDuplicate(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostFilesByIdDuplicate($id), $fetch);
    }
    /**
    *
    *
    * @param array $queryParameters {
    *     @var string $status Return Procedure list based on the status for each Procedure
    *     @var bool $template Used to get Procedure template list
    *     @var array $members Get Procedure list for given members (paraph mode)
    *     @var string $itemsPerPage Number of items per page for the pagination
    *     @var bool $pagination Enable the pagination
    *     @var int $page Page of the pagination
    *     @var string $name Filter by name (contains)
    *     @var string $members.firstname Filter by member firstname (contains)
    *     @var string $members.lastname Filter by member lastname (contains)
    *     @var string $members.phone Filter by member phone (contains)
    *     @var string $members.email Filter by member email (contains)
    *     @var string $files.name Filter by file name (contains)
    *     @var array $createdAt Filter by creation date

    createdAt[after]=2017-09-18
    createdAt[before]=2017-09-18
    createdAt[strictly_after]=2017-09-18
    createdAt[strictly_before]=2017-09-18
    *     @var array $updatedAt Filter by update date

    updatedAt[after]=2017-09-18
    updatedAt[before]=2017-09-18
    updatedAt[strictly_after]=2017-09-18
    updatedAt[strictly_before]=2017-09-18
    *     @var array $expiresAt Filter by expire date

    expiresAt[after]=2017-09-18
    expiresAt[before]=2017-09-18
    expiresAt[strictly_after]=2017-09-18
    expiresAt[strictly_before]=2017-09-18
    *     @var string $order[createdAt] Order by createdAt

    order[createdAt]=asc
    order[createdAt]=desc
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \IIYousign\Exception\GetProceduresNotFoundException
    * @throws \IIYousign\Exception\GetProceduresBadRequestException
    * @throws \IIYousign\Exception\GetProceduresInternalServerErrorException
    * @throws \IIYousign\Exception\GetProceduresUnauthorizedException
    *
    * @return null|\IIYousign\Model\ProcedureOutput[]|\Psr\Http\Message\ResponseInterface
    */
    public function getProcedures(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetProcedures($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \IIYousign\Model\ProcedureInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostProcedureNotFoundException
     * @throws \IIYousign\Exception\PostProcedureBadRequestException
     * @throws \IIYousign\Exception\PostProcedureInternalServerErrorException
     * @throws \IIYousign\Exception\PostProcedureUnauthorizedException
     *
     * @return null|\IIYousign\Model\ProcedureOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postProcedure(\IIYousign\Model\ProcedureInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostProcedure($requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\DeleteProcedureByIdNotFoundException
     * @throws \IIYousign\Exception\DeleteProcedureByIdBadRequestException
     * @throws \IIYousign\Exception\DeleteProcedureByIdInternalServerErrorException
     * @throws \IIYousign\Exception\DeleteProcedureByIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProcedureById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\DeleteProcedureById($id), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetProcedureByIdNotFoundException
     * @throws \IIYousign\Exception\GetProcedureByIdBadRequestException
     * @throws \IIYousign\Exception\GetProcedureByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetProcedureByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\ProcedureOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getProcedureById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetProcedureById($id), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\ProcedureInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutProcedureByIdNotFoundException
     * @throws \IIYousign\Exception\PutProcedureByIdBadRequestException
     * @throws \IIYousign\Exception\PutProcedureByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutProcedureByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\ProcedureOutput|\Psr\Http\Message\ResponseInterface
     */
    public function putProcedureById(string $id, \IIYousign\Model\ProcedureInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutProcedureById($id, $requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\ProcedureDuplicateInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostProceduresByIdDuplicateNotFoundException
     * @throws \IIYousign\Exception\PostProceduresByIdDuplicateBadRequestException
     * @throws \IIYousign\Exception\PostProceduresByIdDuplicateInternalServerErrorException
     * @throws \IIYousign\Exception\PostProceduresByIdDuplicateUnauthorizedException
     *
     * @return null|\IIYousign\Model\ProcedureOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postProceduresByIdDuplicate(string $id, \IIYousign\Model\ProcedureDuplicateInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostProceduresByIdDuplicate($id, $requestBody), $fetch);
    }
    /**
    *
    *
    * @param array $queryParameters {
    *     @var string $status Return Procedure list based on the status for each Procedure
    *     @var string $name Filter by name (contains)
    *     @var string $members.firstname Filter by member firstname (contains)
    *     @var string $members.lastname Filter by member lastname (contains)
    *     @var string $members.phone Filter by member phone (contains)
    *     @var string $members.email Filter by member email (contains)
    *     @var string $files.name Filter by file name (contains)
    *     @var array $createdAt Filter by creation date

    createdAt[after]=2017-09-18
    createdAt[before]=2017-09-18
    createdAt[strictly_after]=2017-09-18
    createdAt[strictly_before]=2017-09-18
    *     @var array $updatedAt Filter by update date

    updatedAt[after]=2017-09-18
    updatedAt[before]=2017-09-18
    updatedAt[strictly_after]=2017-09-18
    updatedAt[strictly_before]=2017-09-18
    *     @var array $expiresAt Filter by expire date

    expiresAt[after]=2017-09-18
    expiresAt[before]=2017-09-18
    expiresAt[strictly_after]=2017-09-18
    expiresAt[strictly_before]=2017-09-18
    *     @var string $order[createdAt] Order by attribut
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \IIYousign\Exception\GetExportProcedureNotFoundException
    * @throws \IIYousign\Exception\GetExportProcedureBadRequestException
    * @throws \IIYousign\Exception\GetExportProcedureInternalServerErrorException
    * @throws \IIYousign\Exception\GetExportProcedureUnauthorizedException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getExportProcedure(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetExportProcedure($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\ProcedureRemindInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostProceduresByIdRemindNotFoundException
     * @throws \IIYousign\Exception\PostProceduresByIdRemindBadRequestException
     * @throws \IIYousign\Exception\PostProceduresByIdRemindInternalServerErrorException
     * @throws \IIYousign\Exception\PostProceduresByIdRemindUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProceduresByIdRemind(string $id, \IIYousign\Model\ProcedureRemindInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostProceduresByIdRemind($id, $requestBody), $fetch);
    }
    /**
     * Get a Procedure proof file
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetProceduresByIdProofNotFoundException
     * @throws \IIYousign\Exception\GetProceduresByIdProofBadRequestException
     * @throws \IIYousign\Exception\GetProceduresByIdProofInternalServerErrorException
     * @throws \IIYousign\Exception\GetProceduresByIdProofUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProceduresByIdProof(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetProceduresByIdProof($id), $fetch);
    }
    /**
     * Create a new member
     *
     * @param \IIYousign\Model\MemberInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostMemberNotFoundException
     * @throws \IIYousign\Exception\PostMemberBadRequestException
     * @throws \IIYousign\Exception\PostMemberInternalServerErrorException
     * @throws \IIYousign\Exception\PostMemberUnauthorizedException
     *
     * @return null|\IIYousign\Model\MemberOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postMember(\IIYousign\Model\MemberInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostMember($requestBody), $fetch);
    }
    /**
     * Delete a member
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\DeleteMemberByIdNotFoundException
     * @throws \IIYousign\Exception\DeleteMemberByIdBadRequestException
     * @throws \IIYousign\Exception\DeleteMemberByIdInternalServerErrorException
     * @throws \IIYousign\Exception\DeleteMemberByIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMemberById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\DeleteMemberById($id), $fetch);
    }
    /**
     * Edit a member
     *
     * @param string $id
     * @param \IIYousign\Model\MemberInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutMemberByIdNotFoundException
     * @throws \IIYousign\Exception\PutMemberByIdBadRequestException
     * @throws \IIYousign\Exception\PutMemberByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutMemberByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\MemberOutput|\Psr\Http\Message\ResponseInterface
     */
    public function putMemberById(string $id, \IIYousign\Model\MemberInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutMemberById($id, $requestBody), $fetch);
    }
    /**
     * Get a proof file of a member
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetMembersByIdProofNotFoundException
     * @throws \IIYousign\Exception\GetMembersByIdProofBadRequestException
     * @throws \IIYousign\Exception\GetMembersByIdProofInternalServerErrorException
     * @throws \IIYousign\Exception\GetMembersByIdProofUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMembersByIdProof(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetMembersByIdProof($id), $fetch);
    }
    /**
     * Create a new fileObject
     *
     * @param \IIYousign\Model\FileObjectInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostFileObjectNotFoundException
     * @throws \IIYousign\Exception\PostFileObjectBadRequestException
     * @throws \IIYousign\Exception\PostFileObjectInternalServerErrorException
     * @throws \IIYousign\Exception\PostFileObjectUnauthorizedException
     *
     * @return null|\IIYousign\Model\FileObjectOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postFileObject(\IIYousign\Model\FileObjectInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostFileObject($requestBody), $fetch);
    }
    /**
     * Delete a File Object
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\DeleteFileObjectByIdNotFoundException
     * @throws \IIYousign\Exception\DeleteFileObjectByIdBadRequestException
     * @throws \IIYousign\Exception\DeleteFileObjectByIdInternalServerErrorException
     * @throws \IIYousign\Exception\DeleteFileObjectByIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFileObjectById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\DeleteFileObjectById($id), $fetch);
    }
    /**
     * Get a File Object
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetFileObjectByIdNotFoundException
     * @throws \IIYousign\Exception\GetFileObjectByIdBadRequestException
     * @throws \IIYousign\Exception\GetFileObjectByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetFileObjectByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\FileObjectOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getFileObjectById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetFileObjectById($id), $fetch);
    }
    /**
     * Update a File Object
     *
     * @param string $id
     * @param \IIYousign\Model\FileObjectInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutFileObjectByIdNotFoundException
     * @throws \IIYousign\Exception\PutFileObjectByIdBadRequestException
     * @throws \IIYousign\Exception\PutFileObjectByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutFileObjectByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\FileObjectOutput|\Psr\Http\Message\ResponseInterface
     */
    public function putFileObjectById(string $id, \IIYousign\Model\FileObjectInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutFileObjectById($id, $requestBody), $fetch);
    }
    /**
     *
     *
     * @param \IIYousign\Model\OperationInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostOperationNotFoundException
     * @throws \IIYousign\Exception\PostOperationBadRequestException
     * @throws \IIYousign\Exception\PostOperationInternalServerErrorException
     * @throws \IIYousign\Exception\PostOperationUnauthorizedException
     *
     * @return null|\IIYousign\Model\OperationOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postOperation(\IIYousign\Model\OperationInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostOperation($requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetOperationByIdNotFoundException
     * @throws \IIYousign\Exception\GetOperationByIdBadRequestException
     * @throws \IIYousign\Exception\GetOperationByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetOperationByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\OperationOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetOperationById($id), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetAuthenticationsInweboByIdNotFoundException
     * @throws \IIYousign\Exception\GetAuthenticationsInweboByIdBadRequestException
     * @throws \IIYousign\Exception\GetAuthenticationsInweboByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetAuthenticationsInweboByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\AuthenticationInweboOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthenticationsInweboById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetAuthenticationsInweboById($id), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\AuthenticationsInweboIdPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutAuthenticationsInweboByIdNotFoundException
     * @throws \IIYousign\Exception\PutAuthenticationsInweboByIdBadRequestException
     * @throws \IIYousign\Exception\PutAuthenticationsInweboByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutAuthenticationsInweboByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\AuthenticationInweboOutput|\Psr\Http\Message\ResponseInterface
     */
    public function putAuthenticationsInweboById(string $id, \IIYousign\Model\AuthenticationsInweboIdPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutAuthenticationsInweboById($id, $requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetAuthenticationsSmsByIdNotFoundException
     * @throws \IIYousign\Exception\GetAuthenticationsSmsByIdBadRequestException
     * @throws \IIYousign\Exception\GetAuthenticationsSmsByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetAuthenticationsSmsByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\AuthenticationSmsOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthenticationsSmsById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetAuthenticationsSmsById($id), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\AuthenticationsSmsIdPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutAuthenticationsSmsByIdNotFoundException
     * @throws \IIYousign\Exception\PutAuthenticationsSmsByIdBadRequestException
     * @throws \IIYousign\Exception\PutAuthenticationsSmsByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutAuthenticationsSmsByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\AuthenticationSmsOutput|\Psr\Http\Message\ResponseInterface
     */
    public function putAuthenticationsSmsById(string $id, \IIYousign\Model\AuthenticationsSmsIdPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutAuthenticationsSmsById($id, $requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetAuthenticationsEmailByIdNotFoundException
     * @throws \IIYousign\Exception\GetAuthenticationsEmailByIdBadRequestException
     * @throws \IIYousign\Exception\GetAuthenticationsEmailByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetAuthenticationsEmailByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\AuthenticationEmailOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthenticationsEmailById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetAuthenticationsEmailById($id), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\AuthenticationsEmailIdPutBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutAuthenticationsEmailByIdNotFoundException
     * @throws \IIYousign\Exception\PutAuthenticationsEmailByIdBadRequestException
     * @throws \IIYousign\Exception\PutAuthenticationsEmailByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutAuthenticationsEmailByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\AuthenticationEmailOutput|\Psr\Http\Message\ResponseInterface
     */
    public function putAuthenticationsEmailById(string $id, \IIYousign\Model\AuthenticationsEmailIdPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutAuthenticationsEmailById($id, $requestBody), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $member id of member (required for anonymous)
     *     @var string $procedure id of procedure (required if the member attribut is not set)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetConsentProcessesNotFoundException
     * @throws \IIYousign\Exception\GetConsentProcessesBadRequestException
     * @throws \IIYousign\Exception\GetConsentProcessesInternalServerErrorException
     * @throws \IIYousign\Exception\GetConsentProcessesUnauthorizedException
     *
     * @return null|\IIYousign\Model\ConsentProcessOutput[]|\Psr\Http\Message\ResponseInterface
     */
    public function getConsentProcesses(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetConsentProcesses($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \IIYousign\Model\ConsentProcessInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostConsentProcessNotFoundException
     * @throws \IIYousign\Exception\PostConsentProcessBadRequestException
     * @throws \IIYousign\Exception\PostConsentProcessInternalServerErrorException
     * @throws \IIYousign\Exception\PostConsentProcessUnauthorizedException
     *
     * @return null|\IIYousign\Model\ConsentProcessOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postConsentProcess(\IIYousign\Model\ConsentProcessInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostConsentProcess($requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\DeleteConsentProcessByIdNotFoundException
     * @throws \IIYousign\Exception\DeleteConsentProcessByIdBadRequestException
     * @throws \IIYousign\Exception\DeleteConsentProcessByIdInternalServerErrorException
     * @throws \IIYousign\Exception\DeleteConsentProcessByIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteConsentProcessById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\DeleteConsentProcessById($id), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param array $queryParameters {
     *     @var string $member id of member (required for anonymous)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetConsentProcessByIdNotFoundException
     * @throws \IIYousign\Exception\GetConsentProcessByIdBadRequestException
     * @throws \IIYousign\Exception\GetConsentProcessByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetConsentProcessByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\ConsentProcessOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getConsentProcessById(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetConsentProcessById($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\ConsentProcessInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutConsentProcessByIdNotFoundException
     * @throws \IIYousign\Exception\PutConsentProcessByIdBadRequestException
     * @throws \IIYousign\Exception\PutConsentProcessByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutConsentProcessByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\ConsentProcessOutput|\Psr\Http\Message\ResponseInterface
     */
    public function putConsentProcessById(string $id, \IIYousign\Model\ConsentProcessInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutConsentProcessById($id, $requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param array $queryParameters {
     *     @var string $member id of member (required for anonymous)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetConsentProcessValueByIdNotFoundException
     * @throws \IIYousign\Exception\GetConsentProcessValueByIdBadRequestException
     * @throws \IIYousign\Exception\GetConsentProcessValueByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetConsentProcessValueByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\ConsentProcessValueOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getConsentProcessValueById(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetConsentProcessValueById($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $member id of member
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetConsentProcessValueNotFoundException
     * @throws \IIYousign\Exception\GetConsentProcessValueBadRequestException
     * @throws \IIYousign\Exception\GetConsentProcessValueInternalServerErrorException
     * @throws \IIYousign\Exception\GetConsentProcessValueUnauthorizedException
     *
     * @return null|\IIYousign\Model\ConsentProcessValueOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getConsentProcessValue(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetConsentProcessValue($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \IIYousign\Model\ConsentProcessValueInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostConsentProcessValueNotFoundException
     * @throws \IIYousign\Exception\PostConsentProcessValueBadRequestException
     * @throws \IIYousign\Exception\PostConsentProcessValueInternalServerErrorException
     * @throws \IIYousign\Exception\PostConsentProcessValueUnauthorizedException
     *
     * @return null|\IIYousign\Model\ConsentProcessValueOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postConsentProcessValue(\IIYousign\Model\ConsentProcessValueInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostConsentProcessValue($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetSignatureUisNotFoundException
     * @throws \IIYousign\Exception\GetSignatureUisBadRequestException
     * @throws \IIYousign\Exception\GetSignatureUisInternalServerErrorException
     * @throws \IIYousign\Exception\GetSignatureUisUnauthorizedException
     *
     * @return null|\IIYousign\Model\SignatureUiOutput[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSignatureUis(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetSignatureUis(), $fetch);
    }
    /**
    * Here is the url format to build on your side to get a custom signature interface with your settings :
    https://webapp.yousign.com/procedure/sign?members=~2Fmembers~2F__MEMBER_ID__&signatureUi=~2Fsignature_uis~2F__SIGNATURE_UI_ID__
    *
    * @param \IIYousign\Model\SignatureUiInput $requestBody
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \IIYousign\Exception\PostSignatureUiNotFoundException
    * @throws \IIYousign\Exception\PostSignatureUiBadRequestException
    * @throws \IIYousign\Exception\PostSignatureUiInternalServerErrorException
    * @throws \IIYousign\Exception\PostSignatureUiUnauthorizedException
    *
    * @return null|\IIYousign\Model\SignatureUiOutput|\Psr\Http\Message\ResponseInterface
    */
    public function postSignatureUi(\IIYousign\Model\SignatureUiInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostSignatureUi($requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param array $queryParameters {
     *     @var string $id Id of the signature ui
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\DeleteSignatureUiByIdNotFoundException
     * @throws \IIYousign\Exception\DeleteSignatureUiByIdBadRequestException
     * @throws \IIYousign\Exception\DeleteSignatureUiByIdInternalServerErrorException
     * @throws \IIYousign\Exception\DeleteSignatureUiByIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSignatureUiById(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\DeleteSignatureUiById($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param array $queryParameters {
     *     @var string $id id of a signature ui
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetSignatureUiByIdNotFoundException
     * @throws \IIYousign\Exception\GetSignatureUiByIdBadRequestException
     * @throws \IIYousign\Exception\GetSignatureUiByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetSignatureUiByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\SignatureUiOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getSignatureUiById(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetSignatureUiById($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param array $queryParameters {
     *     @var string $id id of signature ui to update
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutSignatureUiByIdNotFoundException
     * @throws \IIYousign\Exception\PutSignatureUiByIdBadRequestException
     * @throws \IIYousign\Exception\PutSignatureUiByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutSignatureUiByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\SignatureUiInputUpdate|\Psr\Http\Message\ResponseInterface
     */
    public function putSignatureUiById(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutSignatureUiById($id, $queryParameters), $fetch);
    }
    /**
     * Only usefull if you use a filter with name or signatureUI
     *
     * @param array $queryParameters {
     *     @var string $name Filtering on name of signature ui labels
     *     @var string $signatureUi Filtering on id of signature ui resource
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetSignatureUiLabelsNotFoundException
     * @throws \IIYousign\Exception\GetSignatureUiLabelsBadRequestException
     * @throws \IIYousign\Exception\GetSignatureUiLabelsInternalServerErrorException
     * @throws \IIYousign\Exception\GetSignatureUiLabelsUnauthorizedException
     *
     * @return null|\IIYousign\Model\SignatureUiLabelOutput[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSignatureUiLabels(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetSignatureUiLabels($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \IIYousign\Model\SignatureUiLabelInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostSignatureUiLabelNotFoundException
     * @throws \IIYousign\Exception\PostSignatureUiLabelBadRequestException
     * @throws \IIYousign\Exception\PostSignatureUiLabelInternalServerErrorException
     * @throws \IIYousign\Exception\PostSignatureUiLabelUnauthorizedException
     *
     * @return null|\IIYousign\Model\SignatureUiLabelOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postSignatureUiLabel(\IIYousign\Model\SignatureUiLabelInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostSignatureUiLabel($requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param array $queryParameters {
     *     @var string $id Id of signature ui label
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\DeleteSignatureUiLabelByIdNotFoundException
     * @throws \IIYousign\Exception\DeleteSignatureUiLabelByIdBadRequestException
     * @throws \IIYousign\Exception\DeleteSignatureUiLabelByIdInternalServerErrorException
     * @throws \IIYousign\Exception\DeleteSignatureUiLabelByIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSignatureUiLabelById(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\DeleteSignatureUiLabelById($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param array $queryParameters {
     *     @var string $id id of signature ui label
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetSignatureUiLabelByIdNotFoundException
     * @throws \IIYousign\Exception\GetSignatureUiLabelByIdBadRequestException
     * @throws \IIYousign\Exception\GetSignatureUiLabelByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetSignatureUiLabelByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\SignatureUiLabelOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getSignatureUiLabelById(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetSignatureUiLabelById($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param \IIYousign\Model\SignatureUiLabelInput $requestBody
     * @param array $queryParameters {
     *     @var string $id Id of signature ui labels
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PutSignatureUiLabelByIdNotFoundException
     * @throws \IIYousign\Exception\PutSignatureUiLabelByIdBadRequestException
     * @throws \IIYousign\Exception\PutSignatureUiLabelByIdInternalServerErrorException
     * @throws \IIYousign\Exception\PutSignatureUiLabelByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\SignatureUiLabelOutput|\Psr\Http\Message\ResponseInterface
     */
    public function putSignatureUiLabelById(string $id, \IIYousign\Model\SignatureUiLabelInput $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PutSignatureUiLabelById($id, $requestBody, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \IIYousign\Model\ServerStampInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostServerStampNotFoundException
     * @throws \IIYousign\Exception\PostServerStampBadRequestException
     * @throws \IIYousign\Exception\PostServerStampInternalServerErrorException
     * @throws \IIYousign\Exception\PostServerStampUnauthorizedException
     *
     * @return null|\IIYousign\Model\ServerStampOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postServerStamp(\IIYousign\Model\ServerStampInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostServerStamp($requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetServerStampByIdNotFoundException
     * @throws \IIYousign\Exception\GetServerStampByIdBadRequestException
     * @throws \IIYousign\Exception\GetServerStampByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetServerStampByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\ServerStampOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getServerStampById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetServerStampById($id), $fetch);
    }
    /**
     *
     *
     * @param \IIYousign\Model\CheckDocumentIdentitiesInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostCheckDocumentIdentityNotFoundException
     * @throws \IIYousign\Exception\PostCheckDocumentIdentityBadRequestException
     * @throws \IIYousign\Exception\PostCheckDocumentIdentityInternalServerErrorException
     * @throws \IIYousign\Exception\PostCheckDocumentIdentityUnauthorizedException
     *
     * @return null|\IIYousign\Model\CheckDocumentIdentitiesOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postCheckDocumentIdentity(\IIYousign\Model\CheckDocumentIdentitiesInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostCheckDocumentIdentity($requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetCheckDocumentIdentityByIdNotFoundException
     * @throws \IIYousign\Exception\GetCheckDocumentIdentityByIdBadRequestException
     * @throws \IIYousign\Exception\GetCheckDocumentIdentityByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetCheckDocumentIdentityByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\CheckDocumentIdentitiesOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getCheckDocumentIdentityById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetCheckDocumentIdentityById($id), $fetch);
    }
    /**
     *
     *
     * @param \IIYousign\Model\CheckDocumentBankAccountsInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\PostCheckDocumentBankAccountNotFoundException
     * @throws \IIYousign\Exception\PostCheckDocumentBankAccountBadRequestException
     * @throws \IIYousign\Exception\PostCheckDocumentBankAccountInternalServerErrorException
     * @throws \IIYousign\Exception\PostCheckDocumentBankAccountUnauthorizedException
     *
     * @return null|\IIYousign\Model\CheckDocumentBankAccountsOutput|\Psr\Http\Message\ResponseInterface
     */
    public function postCheckDocumentBankAccount(\IIYousign\Model\CheckDocumentBankAccountsInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\PostCheckDocumentBankAccount($requestBody), $fetch);
    }
    /**
     *
     *
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \IIYousign\Exception\GetCheckDocumentBankAccountByIdNotFoundException
     * @throws \IIYousign\Exception\GetCheckDocumentBankAccountByIdBadRequestException
     * @throws \IIYousign\Exception\GetCheckDocumentBankAccountByIdInternalServerErrorException
     * @throws \IIYousign\Exception\GetCheckDocumentBankAccountByIdUnauthorizedException
     *
     * @return null|\IIYousign\Model\CheckDocumentBankAccountsOutput|\Psr\Http\Message\ResponseInterface
     */
    public function getCheckDocumentBankAccountById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \IIYousign\Endpoint\GetCheckDocumentBankAccountById($id), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://staging-api.yousign.com/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);

            $authentication = new Bearer('73a5b44c95ea1b0865051921891a5bec');
            $authenticationPlugin = new AuthenticationPlugin($authentication);
            $plugins[] = $authenticationPlugin;

            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \IIYousign\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
