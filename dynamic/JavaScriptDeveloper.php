<?php

class JavaScriptDeveloper extends DeveloperDecorator
{
    public $sourceControl = 'git';

    public function __get($propertyName)
    {
        if ($propertyName == 'ide')
        {
            return $this->developer->ide . ' & SublimeText';
        }
        return $this->developer->$propertyName;
    }

}
