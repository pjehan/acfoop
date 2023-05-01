<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait Multiple
{
    private bool $multiple = false;

    /**
     * @return bool
     */
    public function isMultiple(): bool
    {
        return $this->multiple;
    }

    /**
     * @param bool $multiple
     * @return Field
     */
    public function setMultiple(bool $multiple): Field
    {
        $this->multiple = $multiple;
        return $this;
    }

    public function multipleToArray(): array
    {
        return ['multiple' => $this->isMultiple()];
    }

}
