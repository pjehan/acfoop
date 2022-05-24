<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait Placeholder
{
    private string $placeholder = '';

    /**
     * @return string
     */
    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    /**
     * @param string $placeholder
     * @return Field
     */
    public function setPlaceholder(string $placeholder): Field
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function placeholderToArray(): array
    {
        return ['placeholder' => $this->getPlaceholder()];
    }

}
