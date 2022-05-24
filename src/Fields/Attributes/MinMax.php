<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait MinMax
{
    private ?int $min = null;
    private ?int $max = null;

    /**
     * @return int
     */
    public function getMin(): ?int
    {
        return $this->min;
    }

    /**
     * @param int $min
     * @return Field
     */
    public function setMin(int $min): Field
    {
        $this->min = $min;
        return $this;
    }

    /**
     * @return int
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * @param int $max
     * @return Field
     */
    public function setMax(int $max): Field
    {
        $this->max = $max;
        return $this;
    }

    public function minMaxToArray(): array
    {
        return [
            'min' => $this->getMin(),
            'max' => $this->getMax()
        ];
    }

}
