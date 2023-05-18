<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Instructions;
use Pjehan\Acfoop\Fields\Attributes\Layout;
use Pjehan\Acfoop\Fields\Attributes\MinMax;
use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\SubFields;

class FlexibleContentLayout extends Field
{
	use SubFields;
	use MinMax;

	private string $display = 'block';

    public function getType(): string
    {
        return 'flexible_content';
    }

	/**
	 * @return string
	 */
	public function getDisplay(): string
	{
		return $this->display;
	}

	/**
	 * @param string $display
	 * @return FlexibleContentLayout
	 */
	public function setDisplay(string $display): FlexibleContentLayout
	{
		$this->display = $display;
		return $this;
	}

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
			$this->subFieldsToArray(),
			$this->minMaxToArray(),
			[
				'display' => $this->getDisplay(),
			]
        );
    }
}
