<?php

abstract class DeveloperDecorator implements DeveloperInterface
{
    public function __construct($developer)
    {
        $this->developer = $developer;
    }

    public function doSomeWork(){
        return $this->developer->doSomeWork();
    }

    public function stopWorking(){
        return $this->developer->stopWorking();
    }

    public function socialise(){
        return $this->developer->socialise();
    }

    public function __get($propertyName)
    {
        return $this->developer->$propertyName;
    }
}
