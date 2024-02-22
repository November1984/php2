<?php

use GeekBrains\LevelTwo\Person\Person;
use GeekBrains\LevelTwo\Person\Name;
use GeekBrains\LevelTwo\Blog\User;
use GeekBrains\LevelTwo\Blog\Post;

spl_autoload_register("classLoad");
function classLoad($className){
   $s = str_replace(["GeekBrains\\LevelTwo", "\\" ], 
                    ["src", DIRECTORY_SEPARATOR],
                    $className).".php";
   require $s;
}

$user = new User(1, new Name ("Карлсон", null), "Helicopter");
$person = new Person(new Name ("Карлсон", null), new DateTimeImmutable() );


echo $user . PHP_EOL;
echo $person . PHP_EOL;
echo new Post(1, $person, "Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.") . PHP_EOL;

