<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Layout;
use Pjehan\Acfoop\Fields\Attributes\MinMax;
use Pjehan\Acfoop\Fields\Attributes\SubFields;

class Repeater extends Field
{
    use SubFields;
    use Layout;
    use MinMax;

    private bool $pagination = false;
    private int $rowsPerPage = 20;
    private string $buttonLabel = 'Add Row';

    public function getType(): string
    {
        return 'repeater';
    }

    /**
     * @return bool
     */
    public function isPagination(): bool
    {
        return $this->pagination;
    }

    /**
     * @param bool $pagination
     * @return Repeater
     */
    public function setPagination(bool $pagination): Repeater
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * @return int
     */
    public function getRowsPerPage(): int
    {
        return $this->rowsPerPage;
    }

    /**
     * @param int $rowsPerPage
     * @return Repeater
     */
    public function setRowsPerPage(int $rowsPerPage): Repeater
    {
        $this->rowsPerPage = $rowsPerPage;
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
     * @return Repeater
     */
    public function setButtonLabel(string $buttonLabel): Repeater
    {
        $this->buttonLabel = $buttonLabel;
        return $this;
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->subFieldsToArray(),
            $this->layoutToArray(),
            $this->minMaxToArray(),
            [
                'pagination' => $this->isPagination() ? 1 : 0,
                'rows_per_page' => $this->getRowsPerPage(),
                'button_label' => $this->getButtonLabel(),
            ]
        );
    }
}
