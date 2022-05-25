<?php

namespace Pjehan\Acfoop;

class Block
{

	private string $name;
	private string $title;
	private string $description;
	private string $renderTemplate;
	private string $category;
	private string $icon;
	/** @var string[] */
	private array $keywords;

	/**
	 * @param string $name
	 * @param string $title
	 * @param string $description
	 * @param string $renderTemplate
	 * @param string $category
	 * @param string $icon
	 * @param string[] $keywords
	 */
	public function __construct(string $name, string $title, string $description, string $renderTemplate, string $category = 'text', string $icon = 'star-filled', array $keywords = [])
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
