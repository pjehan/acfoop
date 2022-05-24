<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Choices;
use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;

class Select extends Field
{
    use Choices;
    use ReturnFormat;
    use Required;

    public function getType(): string
    {
        return 'select';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->choicesToArray(),
            $this->returnFormatToArray(),
            $this->requiredToArray()
        );
    }
}
