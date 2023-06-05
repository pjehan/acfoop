<?php


namespace Pjehan\Acfoop\Fields;



use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Required;

class DatePicker extends Field
{

    use DefaultValue;
    use Required;

	private string $displayFormat = 'd/m/Y';
	private string $returnFormat = 'd/m/Y';
	private int $first_day = 1; // First day of the week (0: Sunday, 1: Monday, etc)

    public function getType(): string
    {
        return 'date_picker';
    }

	/**
	 * @return string
	 */
	public function getDisplayFormat(): string
	{
		return $this->displayFormat;
	}

	/**
	 * @param string $displayFormat
	 * @return DatePicker
	 */
	public function setDisplayFormat(string $displayFormat): DatePicker
	{
		$this->displayFormat = $displayFormat;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getReturnFormat(): string
	{
		return $this->returnFormat;
	}

	/**
	 * @param string $returnFormat
	 * @return DatePicker
	 */
	public function setReturnFormat(string $returnFormat): DatePicker
	{
		$this->returnFormat = $returnFormat;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getFirstDay(): int
	{
		return $this->first_day;
	}

	/**
	 * @param int $first_day
	 * @return DatePicker
	 */
	public function setFirstDay(int $first_day): DatePicker
	{
		$this->first_day = $first_day;
		return $this;
	}

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->defaultValueToArray(),
            $this->requiredToArray(),
			[
				'display_format' => $this->getDisplayFormat(),
				'return_format' => $this->getReturnFormat(),
				'first_day' => $this->getFirstDay(),
			]
        );
    }

}
