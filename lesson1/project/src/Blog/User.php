<?php
namespace GeekBrains\LevelTwo\Blog;

use GeekBrains\LevelTwo\Person\Name;
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

    public function id(): int {
        return $this->id;
    }
    public function setUserId(int $id) {
        $this->id = $id;
    }
    public function getUserName(): Name {
        return $this->userName;
    }
    public function setUserName(Name $userName) {
        $this->userName = $userName; 
    }
    public function getLogin(): string {
        return $this->login;
    }
    public function setLogin(string $login) {
        $this->login = $login;
    }
}