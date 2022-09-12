<?php

namespace IIYousign\Model;

class FileObjectInput
{
    /**
     * File id reference
     *
     * @var string
     */
    protected $file;
    /**
    * Page of the visible signature. This property is ignored if fieldName is set.
    If you want a visible signature, you must set page, position and fieldName.
    *
    * @var int|null
    */
    protected $page = 1;
    /**
     * Coordinates of the signature image to set. Format is : "llx,lly,urx,ury". llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @var string|null
     */
    protected $position = '328,36,541,88';
    /**
     * [type=signature] Name of the signature field existing in the document, it will be not used on the signature image.
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
    protected $mention2;
    /**
     * Member id reference
     *
     * @var string|null
     */
    protected $member;
    /**
     * [type=signature] The reason they are signing the agreement
     *
     * @var string|null
     */
    protected $reason = 'Signed by Yousign';
    /**
     * The type of the file object
     *
     * @var string|null
     */
    protected $type = 'signature';
    /**
     * [type=text] Indicate if the member must fill or not the field
     *
     * @var bool|null
     */
    protected $contentRequired = false;
    /**
     * [type=text] The content of the field. Could be used for placeholder
     *
     * @var string|null
     */
    protected $content;
    /**
     * [type=text] The font familly used to render the TextField. Currently only the default value will be used.
     *
     * @var string|null
     */
    protected $fontFamily = 'raleway';
    /**
     * [type=text] The font size used to render the field. Currently only the default value will be used.
     *
     * @var int|null
     */
    protected $fontSize = 12;
    /**
     * [type=text] The font color used to render the field.
     *
     * @var string|null
     */
    protected $fontColor;
    /**
     * File id reference
     *
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }
    /**
     * File id reference
     *
     * @param string $file
     *
     * @return self
     */
    public function setFile(string $file): self
    {
        $this->file = $file;
        return $this;
    }
    /**
    * Page of the visible signature. This property is ignored if fieldName is set.
    If you want a visible signature, you must set page, position and fieldName.
    *
    * @return int|null
    */
    public function getPage(): ?int
    {
        return $this->page;
    }
    /**
    * Page of the visible signature. This property is ignored if fieldName is set.
    If you want a visible signature, you must set page, position and fieldName.
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
     * Coordinates of the signature image to set. Format is : "llx,lly,urx,ury". llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }
    /**
     * Coordinates of the signature image to set. Format is : "llx,lly,urx,ury". llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
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
     * [type=signature] Name of the signature field existing in the document, it will be not used on the signature image.
     *
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * [type=signature] Name of the signature field existing in the document, it will be not used on the signature image.
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
    public function getMention2(): ?string
    {
        return $this->mention2;
    }
    /**
    * [type=signature] Text associated below the signature image. (internal usage only, should not be used).

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @param string|null $mention2
    *
    * @return self
    */
    public function setMention2(?string $mention2): self
    {
        $this->mention2 = $mention2;
        return $this;
    }
    /**
     * Member id reference
     *
     * @return string|null
     */
    public function getMember(): ?string
    {
        return $this->member;
    }
    /**
     * Member id reference
     *
     * @param string|null $member
     *
     * @return self
     */
    public function setMember(?string $member): self
    {
        $this->member = $member;
        return $this;
    }
    /**
     * [type=signature] The reason they are signing the agreement
     *
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * [type=signature] The reason they are signing the agreement
     *
     * @param string|null $reason
     *
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * The type of the file object
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The type of the file object
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * [type=text] Indicate if the member must fill or not the field
     *
     * @return bool|null
     */
    public function getContentRequired(): ?bool
    {
        return $this->contentRequired;
    }
    /**
     * [type=text] Indicate if the member must fill or not the field
     *
     * @param bool|null $contentRequired
     *
     * @return self
     */
    public function setContentRequired(?bool $contentRequired): self
    {
        $this->contentRequired = $contentRequired;
        return $this;
    }
    /**
     * [type=text] The content of the field. Could be used for placeholder
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * [type=text] The content of the field. Could be used for placeholder
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * [type=text] The font familly used to render the TextField. Currently only the default value will be used.
     *
     * @return string|null
     */
    public function getFontFamily(): ?string
    {
        return $this->fontFamily;
    }
    /**
     * [type=text] The font familly used to render the TextField. Currently only the default value will be used.
     *
     * @param string|null $fontFamily
     *
     * @return self
     */
    public function setFontFamily(?string $fontFamily): self
    {
        $this->fontFamily = $fontFamily;
        return $this;
    }
    /**
     * [type=text] The font size used to render the field. Currently only the default value will be used.
     *
     * @return int|null
     */
    public function getFontSize(): ?int
    {
        return $this->fontSize;
    }
    /**
     * [type=text] The font size used to render the field. Currently only the default value will be used.
     *
     * @param int|null $fontSize
     *
     * @return self
     */
    public function setFontSize(?int $fontSize): self
    {
        $this->fontSize = $fontSize;
        return $this;
    }
    /**
     * [type=text] The font color used to render the field.
     *
     * @return string|null
     */
    public function getFontColor(): ?string
    {
        return $this->fontColor;
    }
    /**
     * [type=text] The font color used to render the field.
     *
     * @param string|null $fontColor
     *
     * @return self
     */
    public function setFontColor(?string $fontColor): self
    {
        $this->fontColor = $fontColor;
        return $this;
    }
}
