<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\ShowPreview;

class FontAwesome extends Field
{

    use ShowPreview;

    public function getType(): string
    {
        return 'font-awesome';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->showPreviewToArray()
        );
    }

}
