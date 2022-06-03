<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\FieldType;
use Pjehan\Acfoop\Fields\Attributes\MinMax;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;

class Taxonomy extends Field
{
    use MinMax;
    use FieldType;
    use ReturnFormat;

    private string $taxonomy;

    public function __construct(string $key, string $label, ?string $name = null)
    {
        parent::__construct($key, $label, $name);
        $this->setReturnFormat('object');
    }

    /**
     * @return string
     */
    public function getTaxonomy(): string
    {
        return $this->taxonomy;
    }

    /**
     * @param string $taxonomy
     * @return Field
     */
    public function setTaxonomy(string $taxonomy): Field
    {
        $this->taxonomy = $taxonomy;
        return $this;
    }

    public function getType(): string
    {
        return 'taxonomy';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->minMaxToArray(),
            $this->fieldTypeToArray(),
            $this->returnFormatToArray(),
            [
                'taxonomy' => $this->getTaxonomy()
            ]
        );
    }
}
