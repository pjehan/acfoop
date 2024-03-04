<?php

namespace Pjehan\Acfoop;

abstract class Container
{

    public function __construct()
    {
        add_action('acf/init', [$this, 'addCustomFields']);
    }

    abstract public function addCustomFields(): void;

}