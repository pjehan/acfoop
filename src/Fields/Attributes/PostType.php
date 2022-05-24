<?php


namespace Pjehan\Acfoop\Fields\Attributes;


use Pjehan\Acfoop\Fields\Field;

trait PostType
{
    private array $post_types = [];

    /**
     * @return string[]
     */
    public function getPostTypes(): array
    {
        return $this->post_types;
    }

    /**
     * @param string[] $post_types
     * @return Field
     */
    public function setPostTypes(array $post_types): Field
    {
        foreach ($post_types as $post_type) {
            $this->addPostType($post_type);
        }
        return $this;
    }

    /**
     * @param string $post_type
     * @return Field
     */
    public function addPostType(string $post_type): Field
    {
        $this->post_types[] = $post_type;
        return $this;
    }

    public function postTypeToArray(): array
    {
        return ['post_type' => $this->getPostTypes()];
    }

}
