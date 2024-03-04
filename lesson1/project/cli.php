<?php

use GeekBrains\LevelTwo\Blog\Exceptions\UserNotFoundException;
use GeekBrains\LevelTwo\Blog\Repositories\InMemoryUserRepository;
use GeekBrains\LevelTwo\Person\Person;
use GeekBrains\LevelTwo\Person\Name;
use GeekBrains\LevelTwo\Blog\User;
use GeekBrains\LevelTwo\Blog\Post;

require "vendor/autoload.php";
// spl_autoload_register("classLoad");
function classLoad($className){
    // echo "Person\\".$className.".php".PHP_EOL;
   $s = str_replace("\\", DIRECTORY_SEPARATOR ,$className).".php";
   require $s;
}

$user = new User(1, new Name ("Карлсон", null), "Helicopter");
$person = new Person(new Name ("Карлсон", null), new DateTimeImmutable() );
echo $user . PHP_EOL;
echo $person . PHP_EOL;
echo new Post(1, $person, "Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.") . PHP_EOL;

$fake = Faker\Factory::create("ru_RU");
print_r ($fake->address());

$userRepository = new InMemoryUserRepository;
$user2 = new User(2, new Name($fake->firstName("male"), $fake->lastName("male")), $fake->userName());

$userRepository->save($user);
$userRepository->save($user2);
echo "извлекаю\n\n";

try {
echo $userRepository->get(1).PHP_EOL;
echo $userRepository->get(2).PHP_EOL;
echo $userRepository->get(3).PHP_EOL;
}
catch (UserNotFoundException $exception){
    echo $exception->getMessage().PHP_EOL;
}
catch (Exception $exception) {
    echo $exception->getMessage().PHP_EOL;
}