<?php
namespace GeekBrains\LevelTwo\Person;
class Person{
    public function __construct(
        private Name $name,
        private \DateTimeImmutable $registeredIn
    ){
        $this->name = $name;
        $this->registeredIn = $registeredIn;
    }

    public function __toString(){
        return $this->name." (на сайте с ".
        $this->registeredIn->format("Y.m.d h:i:s").")";
    }
}