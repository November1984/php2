<?php

namespace GeekBrains\LevelTwo\Blog\Repositories;

use GeekBrains\LevelTwo\Blog\Exceptions\UserNotFoundException;
use GeekBrains\LevelTwo\Blog\User;

class InMemoryUserRepository {

    private array $users = [];

    public function save(User $user){
        $this->users[] = $user;
    }
    public function get(int $id): User {
        foreach ($this->users as $user){
            if ($user->id() === $id) {
                return $user;
            }
        }
        throw new UserNotFoundException ("Пользователь не найден: ".$id);
    }
}