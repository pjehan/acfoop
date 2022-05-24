<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\AllowNull;
use Pjehan\Acfoop\Fields\Attributes\Choices;
use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Required;

class Radio extends Field
{

    use Choices;
    use Required;
    use AllowNull;
    use DefaultValue;

    public function getType(): string
    {
        return 'radio';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->choicesToArray(),
            $this->requiredToArray(),
            $this->allowNullToArray(),
            $this->defaultValueToArray()
        );
    }

}
