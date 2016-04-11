<?php

class Developer
{
    public $name;
    public $sourceControl;
    public $ide;
    public $attitude;

    public function __construct($name)
    {
        $this->name = $name;
        $this->ide = 'PHPStorm';
        $this->attitude = 'Meh!';
        $this->sourceControl = 'SVN';
    }

    public function doSomeWork()
    {
        return 'OK, I will do some work';
    }

    public function stopWorking()
    {
        return 'Yay, beer, chocolate, home!';
    }

    public function socialise()
    {
        return 'Have you seen the new Star Wars movie?';
    }
}
