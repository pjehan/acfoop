<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;
use InvalidArgumentException;

trait FieldType
{
    private string $field_type = 'checkbox';

    /**
     * @return string
     */
    public function getFieldType(): string
    {
        return $this->field_type;
    }

    /**
     * @param string $field_type
     * @return Field
     */
    public function setFieldType(string $field_type): Field
    {
        if (!in_array($field_type, ['checkbox', 'multi_select', 'radio', 'select'])) {
            throw new InvalidArgumentException("Invalid argument return format [$field_type].");
        }
        $this->field_type = $field_type;
        return $this;
    }

    public function fieldTypeToArray(): array
    {
        return ['field_type' => $this->getFieldtype()];
    }

}
