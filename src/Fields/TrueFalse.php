<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\AllowNull;
use Pjehan\Acfoop\Fields\Attributes\Choices;
use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Required;

class TrueFalse extends Field
{

    use Required;
    use DefaultValue;

    public function getType(): string
    {
        return 'true_false';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->requiredToArray(),
            $this->defaultValueToArray()
        );
    }

}
