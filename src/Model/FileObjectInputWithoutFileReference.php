<?php

namespace IIYousign\Model;

class FileObjectInputWithoutFileReference
{
    /**
    * Page of the visible signature. This property is ignored if fieldName is set.
    If you want a visible signature, you must set page, position and fieldName.
    *
    * @var int
    */
    protected $page;
    /**
     * Coordinates of the signature image to set. Format is : "llx,lly,urx,ury". llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @var string
     */
    protected $position;
    /**
     * Name of the signature field existing in the document, it will be not used on the signature image.
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
    protected $mention2;
    /**
     * The reason they are signing the agreement
     *
     * @var string
     */
    protected $reason = 'Signed by Yousign';
    /**
    * Page of the visible signature. This property is ignored if fieldName is set.
    If you want a visible signature, you must set page, position and fieldName.
    *
    * @return int
    */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
    * Page of the visible signature. This property is ignored if fieldName is set.
    If you want a visible signature, you must set page, position and fieldName.
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
     * Coordinates of the signature image to set. Format is : "llx,lly,urx,ury". llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }
    /**
     * Coordinates of the signature image to set. Format is : "llx,lly,urx,ury". llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
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
     * Name of the signature field existing in the document, it will be not used on the signature image.
     *
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }
    /**
     * Name of the signature field existing in the document, it will be not used on the signature image.
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
    public function getMention2(): string
    {
        return $this->mention2;
    }
    /**
    * Text associated below the signature image.

    You can use some variable inside : {{date.en}} {{date.fr}} {{time}} that it will be parsed to show the date of the signature.
    *
    * @param string $mention2
    *
    * @return self
    */
    public function setMention2(string $mention2): self
    {
        $this->mention2 = $mention2;
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
