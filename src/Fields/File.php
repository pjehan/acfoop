<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;
use Pjehan\Acfoop\Fields\Attributes\MinMax;

class File extends Field
{
    use Required;
    use ReturnFormat;
    use MinMax;

    public function getType(): string
    {
        return 'file';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->requiredToArray(),
            $this->returnFormatToArray(),
            $this->minMaxToArray()
        );
    }
}
