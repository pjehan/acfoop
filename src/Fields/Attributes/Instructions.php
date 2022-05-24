<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait Instructions
{
    private string $instructions = "";

    /**
     * @return string
     */
    public function getInstructions(): string
    {
        return $this->instructions;
    }

    /**
     * @param string $instructions
     * @return Field
     */
    public function setInstructions(string $instructions): Field
    {
        $this->instructions = $instructions;
        return $this;
    }

    public function instructionsToArray(): array
    {
        return ['instructions' => $this->getInstructions()];
    }

}
