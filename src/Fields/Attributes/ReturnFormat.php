<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;
use InvalidArgumentException;

trait ReturnFormat
{
    private string $return_format = 'array';

    /**
     * @return string
     */
    public function getReturnFormat(): string
    {
        return $this->return_format;
    }

    /**
     * @param string $return_format
     * @return Field
     */
    public function setReturnFormat(string $return_format): Field
    {
        if (!in_array($return_format, ['array', 'id', 'label', 'object', 'url', 'value'])) {
            throw new InvalidArgumentException("Invalid argument return format [$return_format].");
        }
        $this->return_format = $return_format;
        return $this;
    }

    public function returnFormatToArray(): array
    {
        return ['return_format' => $this->getReturnFormat()];
    }

}
