<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;

class PostObject extends Field
{
    use Required;
    use ReturnFormat;

    private array $post_types = [];
    private array $post_status = [];
    private array $taxonomies = [];
    private bool $multiple = false;

    public function __construct(string $key, string $label, ?string $name = null)
    {
        parent::__construct($key, $label, $name);
        $this->setReturnFormat('object');
    }

    /**
     * @return array
     */
    public function getPostTypes(): array
    {
        return $this->post_types;
    }

    /**
     * @param array $post_types
     * @return PostObject
     */
    public function setPostTypes(array $post_types): PostObject
    {
        $this->post_types = $post_types;
        return $this;
    }

    /**
     * @param string $post_type
     * @return PostObject
     */
    public function addPostType(string $post_type): PostObject
    {
        $this->post_types[] = $post_type;
        return $this;
    }

    /**
     * @return array
     */
    public function getPostStatus(): array
    {
        return $this->post_status;
    }

    /**
     * @param array $post_status
     * @return PostObject
     */
    public function setPostStatus(array $post_status): PostObject
    {
        $this->post_status = $post_status;
        return $this;
    }

    /**
     * @param string $post_status
     * @return PostObject
     */
    public function addPostStatus(string $post_status): PostObject
    {
        $this->post_status[] = $post_status;
        return $this;
    }

    /**
     * @return array
     */
    public function getTaxonomies(): array
    {
        return $this->taxonomies;
    }

    /**
     * @param array $taxonomies
     * @return PostObject
     */
    public function setTaxonomies(array $taxonomies): PostObject
    {
        $this->taxonomies = $taxonomies;
        return $this;
    }

    /**
     * @param string $taxonomy
     * @return PostObject
     */
    public function addTaxonomy(string $taxonomy): PostObject
    {
        $this->taxonomies[] = $taxonomy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMultiple(): bool
    {
        return $this->multiple;
    }

    /**
     * @param bool $multiple
     * @return PostObject
     */
    public function setMultiple(bool $multiple): PostObject
    {
        $this->multiple = $multiple;
        return $this;
    }

    public function getType(): string
    {
        return 'post_object';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->requiredToArray(),
            $this->returnFormatToArray(),
            [
                'post_type' => $this->getPostTypes(),
                'post_status' => $this->getPostStatus(),
                'taxonomy' => $this->getTaxonomies(),
                'multiple' => $this->isMultiple(),
            ]
        );
    }
}
