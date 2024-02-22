<?php
namespace Person;
class Name {
    private ?string $name;
    private ?string $lastName;

    public function __construct(?string $name, ?string $lastName){
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function __toString(): string{
        return  (isset($this->name) ? " $this->name"
                                    : " без имени").
                (isset($this->lastName) ? " с фамилией $this->lastName"
                                        : ", который не указал фамилию");
    }
}