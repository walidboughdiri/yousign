<?php

namespace IIYousign\Model;

class FileObjectOutput
{
    /**
     * Id of the object
     *
     * @var string
     */
    protected $id;
    /**
     *
     *
     * @var FileOutput
     */
    protected $file;
    /**
     * Page of the visible signature. This property is ignored if fieldName is set. If you want a visible signature, you must set page, position and fieldName.
     *
     * @var int|null
     */
    protected $page;
    /**
     * Coordinates of the signature image to set. Format is : “llx,lly,urx,ury”. llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @var string|null
     */
    protected $position;
    /**
     * [type=signature] Name of the signature field existing in the document
     *
     * @var string|null
     */
    protected $fieldName;
    /**
    * [type=signature] Text associated above the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @var string|null
    */
    protected $mention;
    /**
    * [type=signature] Text associated below the signature image. (internal usage only, should not be used).

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @var string|null
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
     * [type=signature] The reason they are signing the agreement
     *
     * @var string
     */
    protected $reason = 'Signed by Firstname Lastname';
    /**
     * The type of the file object
     *
     * @var string
     */
    protected $type = 'signature';
    /**
     * [type=text] Indicate if the member must fill or not the field
     *
     * @var bool
     */
    protected $contentRequired = false;
    /**
     * [type=text] The content of the field. Could be used for placeholder
     *
     * @var string
     */
    protected $content;
    /**
     * [type=text] The font familly used to render the TextField. Currently only the default value will be used.
     *
     * @var string
     */
    protected $fontFamily = 'raleway';
    /**
     * [type=text] The font size used to render the field. Currently only the default value will be used.
     *
     * @var int
     */
    protected $fontSize = 12;
    /**
     * [type=text] The font color used to render the field.
     *
     * @var string
     */
    protected $fontColor;
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
     *
     *
     * @return FileOutput
     */
    public function getFile(): FileOutput
    {
        return $this->file;
    }
    /**
     *
     *
     * @param FileOutput $file
     *
     * @return self
     */
    public function setFile(FileOutput $file): self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * Page of the visible signature. This property is ignored if fieldName is set. If you want a visible signature, you must set page, position and fieldName.
     *
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page;
    }
    /**
     * Page of the visible signature. This property is ignored if fieldName is set. If you want a visible signature, you must set page, position and fieldName.
     *
     * @param int|null $page
     *
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * Coordinates of the signature image to set. Format is : “llx,lly,urx,ury”. llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }
    /**
     * Coordinates of the signature image to set. Format is : “llx,lly,urx,ury”. llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * [type=signature] Name of the signature field existing in the document
     *
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * [type=signature] Name of the signature field existing in the document
     *
     * @param string|null $fieldName
     *
     * @return self
     */
    public function setFieldName(?string $fieldName): self
    {
        $this->fieldName = $fieldName;
        return $this;
    }
    /**
    * [type=signature] Text associated above the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @return string|null
    */
    public function getMention(): ?string
    {
        return $this->mention;
    }
    /**
    * [type=signature] Text associated above the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @param string|null $mention
    *
    * @return self
    */
    public function setMention(?string $mention): self
    {
        $this->mention = $mention;
        return $this;
    }
    /**
    * [type=signature] Text associated below the signature image. (internal usage only, should not be used).

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @return string|null
    */
    public function getMention2Internal(): ?string
    {
        return $this->mention2Internal;
    }
    /**
    * [type=signature] Text associated below the signature image. (internal usage only, should not be used).

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @param string|null $mention2Internal
    *
    * @return self
    */
    public function setMention2Internal(?string $mention2Internal): self
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
     * [type=signature] The reason they are signing the agreement
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * [type=signature] The reason they are signing the agreement
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
    /**
     * The type of the file object
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of the file object
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * [type=text] Indicate if the member must fill or not the field
     *
     * @return bool
     */
    public function getContentRequired(): bool
    {
        return $this->contentRequired;
    }
    /**
     * [type=text] Indicate if the member must fill or not the field
     *
     * @param bool $contentRequired
     *
     * @return self
     */
    public function setContentRequired(bool $contentRequired): self
    {
        $this->contentRequired = $contentRequired;
        return $this;
    }
    /**
     * [type=text] The content of the field. Could be used for placeholder
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * [type=text] The content of the field. Could be used for placeholder
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * [type=text] The font familly used to render the TextField. Currently only the default value will be used.
     *
     * @return string
     */
    public function getFontFamily(): string
    {
        return $this->fontFamily;
    }
    /**
     * [type=text] The font familly used to render the TextField. Currently only the default value will be used.
     *
     * @param string $fontFamily
     *
     * @return self
     */
    public function setFontFamily(string $fontFamily): self
    {
        $this->fontFamily = $fontFamily;
        return $this;
    }
    /**
     * [type=text] The font size used to render the field. Currently only the default value will be used.
     *
     * @return int
     */
    public function getFontSize(): int
    {
        return $this->fontSize;
    }
    /**
     * [type=text] The font size used to render the field. Currently only the default value will be used.
     *
     * @param int $fontSize
     *
     * @return self
     */
    public function setFontSize(int $fontSize): self
    {
        $this->fontSize = $fontSize;
        return $this;
    }
    /**
     * [type=text] The font color used to render the field.
     *
     * @return string
     */
    public function getFontColor(): string
    {
        return $this->fontColor;
    }
    /**
     * [type=text] The font color used to render the field.
     *
     * @param string $fontColor
     *
     * @return self
     */
    public function setFontColor(string $fontColor): self
    {
        $this->fontColor = $fontColor;
        return $this;
    }
}
