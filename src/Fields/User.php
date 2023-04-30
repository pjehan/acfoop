<?php


namespace Pjehan\Acfoop\Fields;


use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;

class User extends Field
{
    use Required;
    use ReturnFormat;

	const ROLE_ADMINISTRATOR = 'administrator';
	const ROLE_EDITOR = 'editor';
	const ROLE_AUTHOR = 'author';
	const ROLE_CONTRIBUTOR = 'contributor';
	const ROLE_SUBSCRIBER = 'subscriber';

	/** @var string[] $roles */
	private array $roles = [];

	/**
	 * @return array
	 */
	public function getRoles(): array
	{
		return $this->roles;
	}

	/**
	 * @param array $roles
	 * @return User
	 */
	public function setRoles(array $roles): User
	{
		$this->roles = $roles;
		return $this;
	}

	/**
	 * @param string $role
	 * @return User
	 */
	public function addRole(string $role): User
	{
		$this->roles[] = $role;
		return $this;
	}

	/**
	 * @param string $role
	 * @return User
	 */
	public function removeRole(string $role): User
	{
		$index = array_search($role, $this->roles, true);
		if ($index !== false) {
			unset($this->roles[$index]);
		}
		return $this;
	}

    public function getType(): string
    {
        return 'user';
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
			[
				'role' => $this->getRoles(),
			],
			$this->requiredToArray(),
            $this->returnFormatToArray()
        );
    }
}
