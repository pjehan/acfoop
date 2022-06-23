<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Layout;
use Pjehan\Acfoop\Fields\Attributes\SubFields;

class Group extends Field
{
    use SubFields;
    use Layout;

    public function getType(): string
    {
        return 'group';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->subFieldsToArray(),
            $this->layoutToArray()
        );
    }
}
