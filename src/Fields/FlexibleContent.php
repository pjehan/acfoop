<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\MinMax;
use Pjehan\Acfoop\Fields\Attributes\Required;

class FlexibleContent extends Field
{
	use Required;
	use MinMax;

	/** @var FlexibleContentLayout[] $layouts */
	private array $layouts = [];
	private string $buttonLabel = 'Add Row';

    public function getType(): string
    {
        return 'flexible_content';
    }

	/**
	 * @return array
	 */
	public function getLayouts(): array
	{
		return $this->layouts;
	}

	/**
	 * @param array $layouts
	 * @return FlexibleContent
	 */
	public function setLayouts(array $layouts): FlexibleContent
	{
		$this->layouts = $layouts;
		return $this;
	}

	/**
	 * @param FlexibleContentLayout $layout
	 * @return FlexibleContent
	 */
	public function addLayout(FlexibleContentLayout $layout): FlexibleContent
	{
		$this->layouts[] = $layout;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getButtonLabel(): string
	{
		return $this->buttonLabel;
	}

	/**
	 * @param string $buttonLabel
	 * @return FlexibleContent
	 */
	public function setButtonLabel(string $buttonLabel): FlexibleContent
	{
		$this->buttonLabel = $buttonLabel;
		return $this;
	}

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
			$this->requiredToArray(),
			$this->minMaxToArray(),
			[
				'layouts' => array_map(static fn(FlexibleContentLayout $layout) => [$layout->getKey() => $layout->toArray()], $this->getLayouts()),
				'button_label' => $this->getButtonLabel(),
			]
        );
    }
}
