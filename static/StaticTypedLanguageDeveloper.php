<?php

class StaticTypedLanguageDeveloper extends DeveloperDecorator
{
    public $attitude = 'Superbad';
    public $ide = 'Visual Studio';

    public function doSomeWork(){
        return '...but it\'s not type safe!!!';
    }
}