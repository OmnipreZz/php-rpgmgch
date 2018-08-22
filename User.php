<?php

class User {
    protected static $count;
    protected $id;
    protected $email;
    protected $createdAt;

    public function __construct($newMail) {
        self::$count++;
        $this->setId(self::$count);
        $this->email = $newMail;
        $this->createdAt = date('d-m-y');
    }

    public function setId($n) {
        $n = (string)$n;
        $this->id = $n;
    }

    public function getId() {
        return $this->id;
    }

    public function getMail() {
        return $this->email;
    }

    public function getDate() {
        return $this->createdAt;
    }
}