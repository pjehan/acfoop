<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait Choices
{
    private array $choices;

    /**
     * @return array
     */
    public function getChoices(): array
    {
        return $this->choices;
    }

    /**
     * @param array $choices
     * @return Field
     */
    public function setChoices(array $choices): Field
    {
        $this->choices = $choices;
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return Field
     */
    public function addChoice($key, $value): Field
    {
        $this->choices[$key] = $value;
        return $this;
    }

    public function choicesToArray(): array
    {
        return ['choices' => $this->getChoices()];
    }

}
