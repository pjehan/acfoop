<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Placeholder;

class Code extends Field
{

    use Placeholder;

    public const MODE_HTML_MIXED = 'htmlmixed';
    public const MODE_JS = 'javascript';
    public const MODE_HTML = 'text/html';
    public const MODE_CSS = 'css';
    public const MODE_PHP = 'application/x-httpd-php';
    public const THEME_MONOKAI = 'monokai';
    public const THEME_MIDNIGHT = 'midnight';
    public const THEME_DRACULA = 'dracula';
    // TODO: Add more theme constants

    private string $mode = self::MODE_HTML_MIXED;
    private string $theme = self::THEME_MONOKAI;

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return Code
     */
    public function setMode(string $mode): Code
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTheme(): string
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     * @return Code
     */
    public function setTheme(string $theme): Code
    {
        $this->theme = $theme;
        return $this;
    }

    public function getType(): string
    {
        return 'acf_code_field';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->placeholderToArray(),
            [
                'mode' => $this->getMode(),
                'theme' => $this->getTheme()
            ]
        );
    }

}
