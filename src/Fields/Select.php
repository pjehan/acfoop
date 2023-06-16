<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\AllowNull;
use Pjehan\Acfoop\Fields\Attributes\Choices;
use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;

class Select extends Field
{
    use Choices;
    use DefaultValue;
    use ReturnFormat;
    use Required;
    use AllowNull;

    public function getType(): string
    {
        return 'select';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->choicesToArray(),
            $this->defaultValueToArray(),
            $this->returnFormatToArray(),
            $this->requiredToArray(),
            $this->allowNullToArray()
        );
    }
}
