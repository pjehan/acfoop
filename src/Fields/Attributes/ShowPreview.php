<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait ShowPreview
{
    private bool $show_preview = false;

    /**
     * @return bool
     */
    public function isShowPreview(): bool
    {
        return $this->show_preview;
    }

    /**
     * @param bool $show_preview
     * @return Field
     */
    public function setShowPreview(bool $show_preview): Field
    {
        $this->show_preview = $show_preview;
        return $this;
    }

    public function showPreviewToArray(): array
    {
        return ['show_preview' => $this->isShowPreview()];
    }

}
