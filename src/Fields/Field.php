<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\ConditionalLogic;

abstract class Field
{

    use ConditionalLogic;

    private string $key;
    private string $name;
    private string $label;
    private ?Field $parent_field = null;

    /**
     * Field constructor.
     * @param string $key
     * @param string $label
     * @param string|null $name
     */
    public function __construct(string $key, string $label, ?string $name = null)
    {
        $this->setKey($key);
        $this->setLabel($label);
        $this->setName($name ?? $key);
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Get field full key with parent key concatenation if the field is inside a container
     * @return string
     */
    public function getFullKey(): string
    {
        if ($this->getParentField()) {
            return $this->getParentField()->getFullKey() . '_' . $this->getKey();
        }

        return $this->getKey();
    }

    /**
     * @param string $key
     * @return Field
     */
    public function setKey(string $key): Field
    {
        $this->key = $key;
        return $this;
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
     * @return Field
     */
    public function setName(string $name): Field
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return defined('WP_DEBUG') && WP_DEBUG ? $this->label . ' [name=' . $this->getName() . ']' : $this->label;
    }

    /**
     * @param string $label
     * @return Field
     */
    public function setLabel(string $label): Field
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return Field
     */
    public function getParentField(): ?Field
    {
        return $this->parent_field;
    }

    /**
     * @param Field|null $parent_field
     * @return Field
     */
    public function setParentField(?Field $parent_field): Field
    {
        $this->parent_field = $parent_field;
        return $this;
    }

    /**
     * @return string
     */
    abstract public function getType(): string;

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_merge(
            [
                'key' => $this->getFullKey(),
                'name' => $this->getName(),
                'label' => $this->getLabel(),
                'type' => $this->getType()
            ],
            $this->conditionalLogicGroupsToArray()
        );
    }

}
