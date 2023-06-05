<?php


namespace Pjehan\Acfoop\Fields;



use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Required;

class TimePicker extends DatePicker
{

	public function __construct(string $key, string $label, ?string $name = null)
	{
		parent::__construct($key, $label, $name);
		$this->setDisplayFormat('H:i');
		$this->setReturnFormat('H:i');
	}

	public function getType(): string
    {
        return 'time_picker';
    }

}
