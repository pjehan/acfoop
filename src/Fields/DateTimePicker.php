<?php


namespace Pjehan\Acfoop\Fields;



use Pjehan\Acfoop\Fields\Attributes\DefaultValue;
use Pjehan\Acfoop\Fields\Attributes\Required;

class DateTimePicker extends DatePicker
{

	public function __construct(string $key, string $label, ?string $name = null)
	{
		parent::__construct($key, $label, $name);
		$this->setDisplayFormat('d/m/Y H:i');
		$this->setReturnFormat('d/m/Y H:i');
	}

	public function getType(): string
    {
        return 'date_time_picker';
    }

}
