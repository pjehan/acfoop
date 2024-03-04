# ACFOOP

Use Object Oriented Programming to create fields groups for ACF.

## Installation

```shell
composer require pjehan/acfoop
```

## Usage

### Create a container

Create a new class extending the abstract Container class:

```php
use Pjehan\Acfoop\Container;

class Post extends Container
{
    
}
```

### Create a group

Override the `addCustomFields` method to add your fields groups.
This method is automatically called when the hook 'acf/init' is fired.

```php
use Pjehan\Acfoop\Container;
use Pjehan\Acfoop\FieldGroup;

class Post extends Container
{
    public const GROUP_SLUG = 'group_post';

    public function addCustomFields(): void
    {
        $group = new FieldGroup(self::GROUP_SLUG, 'My Group');
    }    
}
```

You can also set the group's location rules:

```php
use Pjehan\Acfoop\Container;
use Pjehan\Acfoop\FieldGroup;
use Pjehan\Acfoop\Location;

class Post extends Container
{
    public const GROUP_SLUG = 'group_post';

    public function addCustomFields(): void
    {
        $group = new FieldGroup(self::GROUP_SLUG, 'My Group');
        $group->addLocation(new Location('post_type', 'post'));
    }    
}
```

Then, you can instantiate the class and the `addCustomFields` method will be called automatically:

```php
new Post();
```

### Create fields

Then, you can add fields to the group.
You can use one of the following Fields classes:

- [Text](#text-field)

#### Text field

```php
use Pjehan\Acfoop\Fields\Text;

$text = new Text('text_field', 'Text Field');
$group->addField($text);
```

