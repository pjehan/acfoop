<?php


namespace Pjehan\Acfoop\Fields;



class Accordion extends Field
{

    private bool $open = false;
    private bool $multiExpand = false;

    public function getType(): string
    {
        return 'accordion';
    }

    /**
     * @return bool
     */
    public function isOpen(): bool
    {
        return $this->open;
    }

    /**
     * @param bool $open
     * @return Accordion
     */
    public function setOpen(bool $open): Accordion
    {
        $this->open = $open;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMultiExpand(): bool
    {
        return $this->multiExpand;
    }

    /**
     * @param bool $multiExpand
     * @return Accordion
     */
    public function setMultiExpand(bool $multiExpand): Accordion
    {
        $this->multiExpand = $multiExpand;
        return $this;
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            ['open' => $this->isOpen()],
            ['multi_expand' => $this->isMultiExpand()]
        );
    }
}
