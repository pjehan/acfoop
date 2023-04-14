<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait ConditionalLogic
{

    /** @var ConditionalLogicGroup[] */
    private array $conditional_logic_groups = [];

    /**
     * @return ConditionalLogicGroup[]
     */
    public function getConditionalLogicGroups(): array
    {
        $groups = [];
        foreach ($this->conditional_logic_groups as $groupKey => $group) {
            foreach ($group->getConditions() as $conditionKey => $condition) {
                $groups[$groupKey][$conditionKey] = $condition->toArray();
            }
        }
        return $groups;
    }

    /**
     * @param ConditionalLogicGroup[] $conditional_logic_groups
     * @return Field|ConditionalLogic
     */
    public function setConditionalLogicGroups(array $conditional_logic_groups): self
    {
        $this->conditional_logic_groups = $conditional_logic_groups;
        return $this;
    }

    /**
     * @param ConditionalLogicGroup $group Condition group
     */
    public function addConditionalLogicGroup(ConditionalLogicGroup $group) {
        $this->conditional_logic_groups[] = $group;
    }

    public function conditionalLogicGroupsToArray(): array
    {
        if (count($this->getConditionalLogicGroups()) === 0) {
            return [];
        }
        return ['conditional_logic' => $this->getConditionalLogicGroups()];
    }

}
