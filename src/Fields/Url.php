<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Placeholder;
use Pjehan\Acfoop\Fields\Attributes\Required;

class Url extends Field
{

    use DefaultValue;
    use Required;
    use Placeholder;

    public function getType(): string
    {
        return 'url';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->defaultValueToArray(),
            $this->placeholderToArray(),
            $this->requiredToArray()
        );
    }
}
