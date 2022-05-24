<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait Required
{
    private bool $required = false;

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return Field
     */
    public function setRequired(bool $required): Field
    {
        $this->required = $required;
        return $this;
    }

    public function requiredToArray(): array
    {
        return ['required' => $this->isRequired()];
    }

}
