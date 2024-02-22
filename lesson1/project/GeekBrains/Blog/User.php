<?php
namespace GeekBrains\Blog;

use Person\Name;
/**
 * @param int $id
 * @param Name $userName
 * @param string $login
 */
class User {
    public function __construct(
        private int $id,
        private Name $userName,
        private string $login,
        ){
            $this->id = $id;
            $this->userName = $userName;
            $this->login = $login;
    }

    public function __toString(): string {
        return "Пользователь $this->id: ".
               $this->userName.
                ", с логином $this->login";
    }
}