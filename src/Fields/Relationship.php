<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\MinMax;
use Pjehan\Acfoop\Fields\Attributes\PostType;

class Relationship extends Field
{
    use MinMax;
    use PostType;

    public function getType(): string
    {
        return 'relationship';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->minMaxToArray(),
            $this->postTypeToArray()
        );
    }
}
