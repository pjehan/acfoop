<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Layout;
use Pjehan\Acfoop\Fields\Attributes\MinMax;
use Pjehan\Acfoop\Fields\Attributes\SubFields;

class Repeater extends Field
{
    use SubFields;
    use Layout;
    use MinMax;

    public function getType(): string
    {
        return 'repeater';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->subFieldsToArray(),
            $this->layoutToArray(),
            $this->minMaxToArray()
        );
    }
}
