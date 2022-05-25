<?php

namespace Pjehan\Acfoop;

class Block
{

    public const MODE_AUTO = 'auto';
    public const MODE_PREVIEW = 'preview';
    public const MODE_EDIT = 'edit';
    public const ALIGN_CENTER = 'edit';
    public const ALIGN_LEFT = 'left';
    public const ALIGN_RIGHT = 'right';
    public const ALIGN_WIDE = 'wide';
    public const ALIGN_FULL = 'full';
    public const ALIGN_TEXT_CENTER = 'edit';
    public const ALIGN_TEXT_LEFT = 'left';
    public const ALIGN_TEXT_RIGHT = 'right';
    public const ALIGN_CONTENT_TOP = 'top';
    public const ALIGN_CONTENT_CENTER = 'center';
    public const ALIGN_CONTENT_BOTTOM = 'bottom';

    private string $name;
    private string $title;
    private string $description;
    private string $renderTemplate;
    private string $category;
    private string $icon;
    /** @var string[] */
    private array $keywords;
    /** @var string[] */
    private array $postTypes;
    private string $mode;
    private string $align;
    private string $alignText;
    private string $alignContent;
    private mixed $renderCallback;
    private string $enqueueStyle;
    private string $enqueueScript;
    private mixed $enqueueAssets;
    private array $supports;

    /**
     * @param string $name
     * @param string $title
     * @param string $description
     * @param string $renderTemplate
     * @param string $category
     * @param string $icon
     * @param string[] $keywords
     */
    public function __construct(string $name, string $title, string $description, string $renderTemplate, string $category = 'common', string $icon = 'star-filled', array $keywords = [])
    {
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
        $this->renderTemplate = $renderTemplate;
        $this->category = $category;
        $this->icon = $icon;
        $this->keywords = $keywords;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Block
     */
    public function setName(string $name): Block
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Block
     */
    public function setTitle(string $title): Block
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Block
     */
    public function setDescription(string $description): Block
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getRenderTemplate(): string
    {
        return $this->renderTemplate;
    }

    /**
     * @param string $renderTemplate
     * @return Block
     */
    public function setRenderTemplate(string $renderTemplate): Block
    {
        $this->renderTemplate = $renderTemplate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return Block
     */
    public function setCategory(string $category): Block
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return Block
     */
    public function setIcon(string $icon): Block
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getKeywords(): array
    {
        return $this->keywords;
    }

    /**
     * @param string[] $keywords
     * @return Block
     */
    public function setKeywords(array $keywords): Block
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPostTypes(): array
    {
        return $this->postTypes;
    }

    /**
     * @param string[] $postTypes
     * @return Block
     */
    public function setPostTypes(array $postTypes): Block
    {
        $this->postTypes = $postTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return Block
     */
    public function setMode(string $mode): Block
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlign(): string
    {
        return $this->align;
    }

    /**
     * @param string $align
     * @return Block
     */
    public function setAlign(string $align): Block
    {
        $this->align = $align;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlignText(): string
    {
        return $this->alignText;
    }

    /**
     * @param string $alignText
     * @return Block
     */
    public function setAlignText(string $alignText): Block
    {
        $this->alignText = $alignText;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlignContent(): string
    {
        return $this->alignContent;
    }

    /**
     * @param string $alignContent
     * @return Block
     */
    public function setAlignContent(string $alignContent): Block
    {
        $this->alignContent = $alignContent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRenderCallback(): mixed
    {
        return $this->renderCallback;
    }

    /**
     * @param mixed $renderCallback
     * @return Block
     */
    public function setRenderCallback(mixed $renderCallback): Block
    {
        $this->renderCallback = $renderCallback;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnqueueStyle(): string
    {
        return $this->enqueueStyle;
    }

    /**
     * @param string $enqueueStyle
     * @return Block
     */
    public function setEnqueueStyle(string $enqueueStyle): Block
    {
        $this->enqueueStyle = $enqueueStyle;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnqueueScript(): string
    {
        return $this->enqueueScript;
    }

    /**
     * @param string $enqueueScript
     * @return Block
     */
    public function setEnqueueScript(string $enqueueScript): Block
    {
        $this->enqueueScript = $enqueueScript;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnqueueAssets(): mixed
    {
        return $this->enqueueAssets;
    }

    /**
     * @param mixed $enqueueAssets
     * @return Block
     */
    public function setEnqueueAssets(mixed $enqueueAssets): Block
    {
        $this->enqueueAssets = $enqueueAssets;
        return $this;
    }

    /**
     * @return array
     */
    public function getSupports(): array
    {
        return $this->supports;
    }

    /**
     * @param array $supports
     * @return Block
     */
    public function setSupports(array $supports): Block
    {
        $this->supports = $supports;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'name'              => $this->getName(),
            'title'             => $this->getTitle(),
            'description'       => $this->getDescription(),
            'render_template'   => $this->getRenderTemplate(),
            'category'          => $this->getCategory(),
            'icon'              => $this->getIcon(),
            'keywords'          => $this->getKeywords(),
        ];
    }

    public function exec(): void
    {
        if (function_exists('acf_register_block_type')) {
            acf_register_block_type($this->toArray());
        }
    }

}
