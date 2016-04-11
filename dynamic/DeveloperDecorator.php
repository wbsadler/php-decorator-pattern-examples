<?php

abstract class DeveloperDecorator
{
    protected $developer;

    public function __construct($developer)
    {
        $this->developer = $developer;
    }

    public function __call($methodName, $arguments)
    {
        return call_user_func_array([$this->developer, $methodName], $arguments);
    }

    public function __get($propertyName)
    {
        return $this->developer->$propertyName;
    }

    public function __set($propertyName, $value)
    {
        $this->developer->$propertyName($value);
    }

    //TODO: probably need __isset() and __unset() for completeness
}
