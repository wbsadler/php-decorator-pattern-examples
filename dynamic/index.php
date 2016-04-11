<style type="text/css">
    body {
        font-family: arial;
    }
</style>


<?php

require_once "Developer.php";
require_once "DeveloperDecorator.php";
require_once "AgileDeveloper.php";
require_once "JavaScriptDeveloper.php";
require_once "TestFirstDeveloper.php";

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

$developer2 = new AgileDeveloper($developer);
debug($developer2, 'Agile Developer');
show($developer2);

$developer3 = new TestFirstDeveloper(new AgileDeveloper(new Developer('Brian Sadler')));
debug($developer3, 'TestFirstDeveloper');
show($developer3);

$developer3 = new JavaScriptDeveloper($developer2);
debug($developer3, 'JavaScriptDeveloper');
show($developer3);

?>

<hr>
<h2>Links</h2>
<ul>
    <li><a href="http://blog.adamcameron.me/2016/04/decorator-pattern-vs-simple-inheritance.html">Decorator Pattern vs simple inheritance </a></li>
    <li><a href="http://blog.adamcameron.me/2016/03/using-decorator-pattern-to-reduce.html"> Using a decorator pattern to reduce inappropriate code complexity</a></li>
</ul>


<hr>

<h2>Advantages</h2>
<p>Simpler code - especially testability!</p>
<p>Run time over compile time</p>
<p>Much more flexible - 10 decorators provides 2^10 possible combinations</p>
<p>Duplicate actions - e.g. BorderDecorator on a Window. If you want double border, just wrap Window twice with BorderDecorator</p>


