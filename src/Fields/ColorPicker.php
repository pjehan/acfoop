<?php


namespace Pjehan\Acfoop\Fields;



use Pjehan\Acfoop\Fields\Attributes\DefaultValue;

class ColorPicker extends Field
{

    use DefaultValue;

    public function getType(): string
    {
        return 'color_picker';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->defaultValueToArray()
        );
    }

}
