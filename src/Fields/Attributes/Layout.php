<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;
use InvalidArgumentException;

trait Layout
{
    private string $layout = 'block';

    /**
     * @return string
     */
    public function getLayout(): string
    {
        return $this->layout;
    }

    /**
     * @param string $layout Can be 'block', 'row' or 'table'
     * @return Field
     */
    public function setLayout(string $layout): Field
    {
        if (!in_array($layout, ['block', 'row', 'table', 'vertical', 'horizontal'])) {
            throw new InvalidArgumentException("Invalid argument layout [$layout].");
        }

        $this->layout = $layout;
        return $this;
    }

    public function layoutToArray(): array
    {
        return ['layout' => $this->getLayout()];
    }

}
