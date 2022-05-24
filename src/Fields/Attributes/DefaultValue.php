<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait DefaultValue
{
    private ?string $default_value;

    /**
     * @return string
     */
    public function getDefaultValue(): ?string
    {
        return $this->default_value;
    }

    /**
     * @param string $default_value
     * @return Field
     */
    public function setDefaultValue(string $default_value): Field
    {
        $this->default_value = $default_value;
        return $this;
    }

    public function defaultValueToArray(): array
    {
        return ['default_value' => $this->getDefaultValue()];
    }

}
