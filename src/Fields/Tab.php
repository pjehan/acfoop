<?php


namespace Pjehan\Acfoop\Fields;


class Tab extends Field
{

    public const PLACEMENT_TOP = 'top';
    public const PLACEMENT_LEFT = 'left';

    private string $placement = self::PLACEMENT_TOP;
    private bool $endPoint = false;

    public function getType(): string
    {
        return 'tab';
    }

    /**
     * @return string
     */
    public function getPlacement(): string
    {
        return $this->placement;
    }

    /**
     * @param string $placement
     * @return Tab
     */
    public function setPlacement(string $placement): Tab
    {
        $this->placement = $placement;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEndPoint(): bool
    {
        return $this->endPoint;
    }

    /**
     * @param bool $endPoint
     * @return Tab
     */
    public function setEndPoint(bool $endPoint): Tab
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            ['placement' => $this->getPlacement()]
        );
    }
}
