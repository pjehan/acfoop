<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Placeholder;
use Pjehan\Acfoop\Fields\Attributes\Required;

class Text extends Field
{
    use Required;
    use Placeholder;
    use DefaultValue;

    private ?int $maxLength = null;

    public function getType(): string
    {
        return 'text';
    }

    /**
     * @return int|null
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @param int|null $maxLength
     * @return Text
     */
    public function setMaxLength(?int $maxLength): Text
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    public function toArray(): array
    {
        $array = array_merge(
            parent::toArray(),
            $this->placeholderToArray(),
            $this->requiredToArray(),
            $this->defaultValueToArray()
        );

        if ($this->getMaxLength() !== null) {
            $array['maxlength'] = $this->getMaxLength();
        }

        return $array;
    }
}
