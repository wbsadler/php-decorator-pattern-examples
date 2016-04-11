<style type="text/css">
    body {
        font-family: arial;
    }
</style>

<?php

require_once "DeveloperInterface.php";
require_once "Developer.php";
require_once "DeveloperDecorator.php";
require_once "StaticTypedLanguageDeveloper.php";

function show($developer)
{
    echo "$developer->name's attitude is $developer->attitude<br>";
    echo "<br><br>";
    echo "$developer->name will now do some work<br>";
    echo "doSomeWork(): " . $developer->doSomeWork();
    echo "<br><br>";
    echo "stopWorking(): " . $developer->stopWorking();
    echo "<br><br>";
    echo "socialise(): " . $developer->socialise();
    echo "<br><br>";
    echo "What IDEs do you use? " . $developer->ide;
    echo "<hr>";
}

function debug($developer, $type)
{
    echo "I am about to create a new $type<br>";
    echo ('<pre>$developer = new ' . $type . '(\'' . $developer->name .'\');</pre><br>');
    echo '<pre>';
    print_r($developer);
    echo '</pre>';
}


$developer = new Developer('Brian Sadler');
debug($developer, 'Developer');
show($developer);

$developer2 = new StaticTypedLanguageDeveloper($developer);
debug($developer2, 'StaticTypedLanguageDeveloper');
show($developer2);


?>

<hr>
<h2>Links</h2>
<ul>
    <li><a href="http://blog.adamcameron.me/2016/04/decorator-pattern-vs-simple-inheritance.html">Decorator Pattern vs simple inheritance </a></li>
    <li><a href="http://blog.adamcameron.me/2016/03/using-decorator-pattern-to-reduce.html"> Using a decorator pattern to reduce inappropriate code complexity</a></li>
</ul>
