<?php

class TestFirstDeveloper extends DeveloperDecorator
{
    public function doSomeWork()
    {
        return $this->developer->doSomeWork() . ' I will start by writing a failing test!';
    }
}
