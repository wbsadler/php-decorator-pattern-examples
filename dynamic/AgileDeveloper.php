<?php

class AgileDeveloper extends DeveloperDecorator
{

    public $attitude = 'Superb';

    public function doSomeWork()
    {
        return $this->developer->doSomeWork() . ', but only when you have added acceptance criteria to the ticket!';
    }
}
