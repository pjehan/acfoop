<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\AllowNull;
use Pjehan\Acfoop\Fields\Attributes\Choices;
use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;

class ButtonGroup extends Field
{

    use Choices;
    use Required;
    use AllowNull;
    use DefaultValue;
    use ReturnFormat;

    public function getType(): string
    {
        return 'button_group';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->choicesToArray(),
            $this->requiredToArray(),
            $this->allowNullToArray(),
            $this->defaultValueToArray(),
            $this->returnFormatToArray()
        );
    }

}
