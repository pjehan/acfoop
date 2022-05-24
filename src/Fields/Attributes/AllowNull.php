<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait AllowNull
{
    private bool $allow_null = true;

    /**
     * @return bool
     */
    public function isAllowNull(): bool
    {
        return $this->allow_null;
    }

    /**
     * @param bool $allow_null
     * @return Field
     */
    public function setAllowNull(bool $allow_null): Field
    {
        $this->allow_null = $allow_null;
        return $this;
    }

    public function allowNullToArray(): array
    {
        return ['allow_null' => $this->isAllowNull()];
    }

}
