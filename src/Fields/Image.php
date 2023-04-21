<?php


namespace Pjehan\Acfoop\Fields;



use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;

class Image extends Field
{
    use ReturnFormat;
    use Required;

    public function getType(): string
    {
        return 'image';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->returnFormatToArray()
        );
    }
}
