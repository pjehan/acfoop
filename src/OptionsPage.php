<?php

namespace Pjehan\Acfoop;

class OptionsPage
{

	private string $pageTitle;
	private string $menuTitle;
	private string $menuSlug;
	private ?string $capability;
	private bool $redirect = true;
	/** @var OptionsPage[] */
	private array $subPages;

	/**
	 * @param string $pageTitle
	 * @param string $menuTitle
	 * @param string $menuSlug
	 */
	public function __construct(string $pageTitle, string $menuTitle, string $menuSlug)
	{
		$this->pageTitle = $pageTitle;
		$this->menuTitle = $menuTitle;
		$this->menuSlug = $menuSlug;
		$this->subPages = [];
	}

	/**
	 * @return string
	 */
	public function getPageTitle(): string
	{
		return $this->pageTitle;
	}

	/**
	 * @param string $pageTitle
	 * @return OptionsPage
	 */
	public function setPageTitle(string $pageTitle): OptionsPage
	{
		$this->pageTitle = $pageTitle;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMenuTitle(): string
	{
		return $this->menuTitle;
	}

	/**
	 * @param string $menuTitle
	 * @return OptionsPage
	 */
	public function setMenuTitle(string $menuTitle): OptionsPage
	{
		$this->menuTitle = $menuTitle;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMenuSlug(): string
	{
		return $this->menuSlug;
	}

	/**
	 * @param string $menuSlug
	 * @return OptionsPage
	 */
	public function setMenuSlug(string $menuSlug): OptionsPage
	{
		$this->menuSlug = $menuSlug;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCapability(): ?string
	{
		return $this->capability;
	}

	/**
	 * @param string|null $capability
	 * @return OptionsPage
	 */
	public function setCapability(?string $capability): OptionsPage
	{
		$this->capability = $capability;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function getRedirect(): bool
	{
		return $this->redirect;
	}

	/**
	 * @param bool $redirect
	 * @return OptionsPage
	 */
	public function setRedirect(bool $redirect): OptionsPage
	{
		$this->redirect = $redirect;
		return $this;
	}

	/**
	 * @return OptionsPage[]
	 */
	public function getSubPages(): array
	{
		return $this->subPages;
	}

	/**
	 * @param OptionsPage[] $subPages
	 * @return OptionsPage
	 */
	public function setSubPages(array $subPages): OptionsPage
	{
		$this->subPages = $subPages;
		return $this;
	}

	/**
	 * @param OptionsPage $subPage
	 * @return $this
	 */
	public function addSubPage(OptionsPage $subPage): OptionsPage
	{
		$this->subPages[] = $subPage;
		return $this;
	}

	public function toArray(): array
	{
		$array = [
			'page_title' 	=> $this->getPageTitle(),
			'menu_title'	=> $this->getMenuTitle(),
			'menu_slug' 	=> $this->getMenuSlug(),
		];

		if (isset($this->capability)) {
			$array['capability'] = $this->getCapability();
		}
		if (isset($this->redirect)) {
			$array['redirect'] = $this->getRedirect();
		}

		return $array;
	}

	public function exec(): void
	{
		if (function_exists('acf_add_options_page')) {
			acf_add_options_page($this->toArray());

            if (function_exists('acf_add_options_sub_page')) {
                foreach ($this->getSubPages() as $subPage) {
                    acf_add_options_sub_page(array_merge($subPage->toArray(), ['parent_slug' => $this->getMenuSlug()]));
                }
            }
		}
	}
}
