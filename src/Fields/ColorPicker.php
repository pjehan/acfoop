<?php


namespace Pjehan\Acfoop\Fields;



use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Required;

class ColorPicker extends Field
{

    use DefaultValue;
    use Required;

    public function getType(): string
    {
        return 'color_picker';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->defaultValueToArray(),
            $this->requiredToArray()
        );
    }

}
