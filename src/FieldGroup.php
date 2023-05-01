<?php


namespace Pjehan\Acfoop;


use Pjehan\Acfoop\Fields\Field;

class FieldGroup extends Field
{

    public const STYLE_DEFAULT = 'default';
    public const STYLE_SEAMLESS = 'seamless';
    public const ELEMENT_PERMALINK = 'permalink';
    public const ELEMENT_CONTENT = 'the_content';
    public const ELEMENT_EXCERPT = 'excerpt';
    public const ELEMENT_DISCUSSION = 'discussion';
    public const ELEMENT_COMMENTS = 'comments';
    public const ELEMENT_REVISIONS = 'revisions';
    public const ELEMENT_SLUG = 'slug';
    public const ELEMENT_AUTHOR = 'author';
    public const ELEMENT_FORMAT = 'format';
    public const ELEMENT_PAGE_ATTRIBUTES = 'page_attributes';
    public const ELEMENT_FEATURED_IMAGE = 'featured_image';
    public const ELEMENT_CATEGORIES = 'categories';
    public const ELEMENT_TRACKBACKS = 'send-trackbacks';

    /** @var Field[] */
    private array $fields = [];

    /** @var Location[] */
    private array $locations = [];

    /** @var string */
    private string $style = self::STYLE_DEFAULT;

    /** @var string[] */
    private array $hiddenElements = [];

    public function __construct(string $key, string $label)
    {
        parent::__construct($key, $label, null);
    }

    public function getType(): string
    {
        return 'field_group';
    }

    /**
     * @return Field[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @return array
     */
    public function getArrayFields(): array
    {
        $fields = [];
        foreach ($this->getFields() as $field) {
            $fields[] = $field->toArray();
        }
        return $fields;
    }

    /**
     * @param Field[] $fields
     * @return FieldGroup
     */
    public function setFields(array $fields): FieldGroup
    {
        foreach ($fields as $field) {
            $this->addField($field);
        }
        return $this;
    }

    public function addField(Field $field): FieldGroup
    {
        $field->setParentField($this);
        $this->fields[] = $field;
        return $this;
    }

    /**
     * @return Location[]
     */
    public function getLocations(): array
    {
        return $this->locations;
    }

    /**
     * @return array
     */
    public function getArrayLocations(): array
    {
        $locations = [];
        foreach ($this->getLocations() as $location) {
            $locations[] = [$location->toArray()];
        }
        return $locations;
    }

    /**
     * @param Location[] $locations
     * @return FieldGroup
     */
    public function setLocations(array $locations): FieldGroup
    {
        foreach ($locations as $location) {
            $this->addLocation($location);
        }
        return $this;
    }

    /**
     * @param Location $location
     * @return FieldGroup
     */
    public function addLocation(Location $location): FieldGroup
    {
        $this->locations[] = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * @param string $style
     * @return FieldGroup
     */
    public function setStyle(string $style): FieldGroup
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getHiddenElements(): array
    {
        return $this->hiddenElements;
    }

    /**
     * @param string $hiddenElement
     * @return FieldGroup
     */
    public function addHiddenElement(string $hiddenElement): FieldGroup
    {
        $this->hiddenElements[] = $hiddenElement;
        return $this;
    }

    /**
     * @param string[] $hiddenElements
     * @return FieldGroup
     */
    public function setHiddenElements(array $hiddenElements): FieldGroup
    {
        $this->hiddenElements = $hiddenElements;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'key' => $this->getFullKey(),
            'title' => $this->getLabel(),
            'style' => $this->getStyle(),
            'hide_on_screen' => $this->getHiddenElements(),
            'location' => $this->getArrayLocations(),
            'fields' => $this->getArrayFields()
        ];
    }

    public function exec(): void
    {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group($this->toArray());
        }
    }
}
