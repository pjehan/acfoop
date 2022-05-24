<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

class ConditionalLogicCondition
{

    public const OPERATOR_NOT_EMPTY = '!=empty';
    public const OPERATOR_EMPTY = '==empty';
    public const OPERATOR_EQUAL = '==';
    public const OPERATOR_DIFFERENT = '!=';

    private Field $field;
    private string $operator;
    private string $value;

    /**
     * ConditionalLogicGroup constructor.
     * @param Field $field
     * @param string $operator
     * @param string $value
     */
    public function __construct(Field $field, string $operator, string $value)
    {
        $this->setField($field);
        $this->setOperator($operator);
        $this->setValue($value);
    }

    /**
     * @return Field
     */
    public function getField(): Field
    {
        return $this->field;
    }

    /**
     * @param Field $field
     * @return ConditionalLogicCondition
     */
    public function setField(Field $field): ConditionalLogicCondition
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     * @return ConditionalLogicCondition
     */
    public function setOperator(string $operator): ConditionalLogicCondition
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ConditionalLogicCondition
     */
    public function setValue(string $value): ConditionalLogicCondition
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'field' => $this->getField()->getFullKey(),
            'operator' => $this->getOperator(),
            'value' => $this->getValue()
        ];
    }

}
