<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Required;

class Wysiwyg extends Field
{

    use Required;

    public function getType(): string
    {
        return 'wysiwyg';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->requiredToArray()
        );
    }

}
