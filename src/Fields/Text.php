<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Placeholder;
use Pjehan\Acfoop\Fields\Attributes\Required;

class Text extends Field
{
    use Required;
    use Placeholder;
    use DefaultValue;

    public function getType(): string
    {
        return 'text';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->placeholderToArray(),
            $this->requiredToArray(),
            $this->defaultValueToArray()
        );
    }
}
