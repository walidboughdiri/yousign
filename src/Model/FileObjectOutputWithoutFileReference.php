<?php

namespace IIYousign\Model;

class FileObjectOutputWithoutFileReference
{
    /**
     * Id of the object
     *
     * @var string
     */
    protected $id;
    /**
     * Page of the visible signature. This property is ignored if fieldName is set. If you want a visible signature, you must set page, position and fieldName.
     *
     * @var int
     */
    protected $page;
    /**
     * Coordinates of the signature image to set. Format is : “llx,lly,urx,ury”. llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @var string
     */
    protected $position;
    /**
     * Name of the signature field existing in the document
     *
     * @var string
     */
    protected $fieldName;
    /**
    * Text associated above the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @var string
    */
    protected $mention;
    /**
    * Text associated below the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @var string
    */
    protected $mention2Internal;
    /**
     * Date of creation
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date of last update
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Date of signature or validation
     *
     * @var \DateTime
     */
    protected $executedAt;
    /**
     * The reason they are signing the agreement
     *
     * @var string
     */
    protected $reason = 'Signed by Yousign';
    /**
     * Id of the object
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of the object
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Page of the visible signature. This property is ignored if fieldName is set. If you want a visible signature, you must set page, position and fieldName.
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * Page of the visible signature. This property is ignored if fieldName is set. If you want a visible signature, you must set page, position and fieldName.
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * Coordinates of the signature image to set. Format is : “llx,lly,urx,ury”. llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }
    /**
     * Coordinates of the signature image to set. Format is : “llx,lly,urx,ury”. llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Name of the signature field existing in the document
     *
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }
    /**
     * Name of the signature field existing in the document
     *
     * @param string $fieldName
     *
     * @return self
     */
    public function setFieldName(string $fieldName): self
    {
        $this->fieldName = $fieldName;
        return $this;
    }
    /**
    * Text associated above the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @return string
    */
    public function getMention(): string
    {
        return $this->mention;
    }
    /**
    * Text associated above the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @param string $mention
    *
    * @return self
    */
    public function setMention(string $mention): self
    {
        $this->mention = $mention;
        return $this;
    }
    /**
    * Text associated below the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @return string
    */
    public function getMention2Internal(): string
    {
        return $this->mention2Internal;
    }
    /**
    * Text associated below the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @param string $mention2Internal
    *
    * @return self
    */
    public function setMention2Internal(string $mention2Internal): self
    {
        $this->mention2Internal = $mention2Internal;
        return $this;
    }
    /**
     * Date of creation
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date of creation
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date of last update
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date of last update
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Date of signature or validation
     *
     * @return \DateTime
     */
    public function getExecutedAt(): \DateTime
    {
        return $this->executedAt;
    }
    /**
     * Date of signature or validation
     *
     * @param \DateTime $executedAt
     *
     * @return self
     */
    public function setExecutedAt(\DateTime $executedAt): self
    {
        $this->executedAt = $executedAt;
        return $this;
    }
    /**
     * The reason they are signing the agreement
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * The reason they are signing the agreement
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }
}
