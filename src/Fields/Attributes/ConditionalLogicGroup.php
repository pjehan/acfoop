<?php


namespace Pjehan\Acfoop\Fields\Attributes;


class ConditionalLogicGroup
{

    /** @var ConditionalLogicCondition[] */
    private array $conditions;

    /**
     * @return ConditionalLogicCondition[]
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * @param ConditionalLogicCondition[] $conditions
     * @return ConditionalLogicGroup
     */
    public function setConditions(array $conditions): ConditionalLogicGroup
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * @param ConditionalLogicCondition $condition
     * @return ConditionalLogicGroup
     */
    public function addCondition(ConditionalLogicCondition $condition): ConditionalLogicGroup
    {
        $this->conditions[] = $condition;
        return $this;
    }

}
