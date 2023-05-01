<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Choices;
use Pjehan\Acfoop\Fields\Attributes\Layout;
use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;

class Checkbox extends Field
{
    use Choices;
    use Layout;
    use ReturnFormat;
    use Required;

    public function getType(): string
    {
        return 'checkbox';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->choicesToArray(),
            $this->layoutToArray(),
            $this->returnFormatToArray(),
            $this->requiredToArray()
        );
    }
}
