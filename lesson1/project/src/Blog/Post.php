<?php

namespace GeekBrains\LevelTwo\Blog;

use GeekBrains\LevelTwo\Person\Person;
class Post {
    public function __construct(
        private int $id,
        private Person $author,
        private string $text
    ){
        $this->id = $id;
        $this->author = $author;
        $this->text = $text;
    }

    public function __toString()
    {
        return $this->author . " пишет: " . $this->text;
    }
}