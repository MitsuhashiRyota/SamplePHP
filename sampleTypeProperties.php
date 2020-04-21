<?php
    class User {
        public int $id;
        public string $name;

        public function __construct(int $id, string $name) {
            $this->id = $id;
            $this->name = $name;
        }
    }

    $user = new User(1, "Tarou");
    echo "<p>TypeProperties：静的片付け言語に似た動き</p>";
    var_dump($user->id);
    var_dump($user->name);