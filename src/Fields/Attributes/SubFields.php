<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait SubFields
{
    /** @var Field[] */
    private array $sub_fields;

    /**
     * @return Field[]
     */
    public function getSubFields(): array
    {
        return $this->sub_fields;
    }

    /**
     * @param Field[] $sub_fields
     * @return Field
     */
    public function setSubFields(array $sub_fields): Field
    {
        foreach ($sub_fields as $sub_field) {
            $this->addSubField($sub_field);
        }
        return $this;
    }

    /**
     * @param Field $sub_field
     * @param int|null $position
     * @return Field
     */
    public function addSubField(Field $sub_field, ?int $position = null): Field
    {
        $sub_field->setParentField($this);

        if (!is_int($position)) {
            $this->sub_fields[] = $sub_field;
        } else {
            array_splice($this->sub_fields, $position - 1, 0, [$sub_field]);
        }

        return $this;
    }

    /**
     * @param string $field_name
     * @return bool
     */
    public function removeSubField(string $field_name): bool
    {
        foreach ($this->getSubFields() as $key => $field) {
            if ($field->getName() === $field_name) {
                unset($this->sub_fields[$key]);
                return true;
            }
        }

        return false;
    }

    /**
     * @return array
     */
    public function subFieldsToArray(): array
    {
        $sub_fields = [];
        foreach ($this->getSubFields() as $sub_field) {
            $sub_fields[] = $sub_field->toArray();
        }
        return ['sub_fields' => $sub_fields];
    }

}
