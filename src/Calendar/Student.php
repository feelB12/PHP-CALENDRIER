<?php

Namespace Calendar ;

class Student {

    private $id;

    private $name;

    private $firstName;

    private $phone;

    private $emNum;

    private $birthDay;

    private $level;

    private $email;

    private $skillz;

    private $startinDay;

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getFirstName(): string {
        return $this->firstName ?? '';
    }
    public function getPhone(): int {
        return $this->phone;
    }
    public function getEmNum(): int {
        return $this->emNum;
    }

    public function getBirthDay(): \DateTimeInterface {
        return new \DateTimeImmutable($this->birthDay);
    }
    
    public function getLevel(): string {
        return $this->level;
    }
     
    public function getEmail(): string {
        return $this->email;
    }

    public function getSkillz(): string {
        return $this->skillz;
    }

    public function getStartinDay(): \DateTimeInterface {
        return new \DateTimeImmutable($this->startinDay ?? '');
    }

    public function setName (string $name) {
        $this->name = $name;
    }
    public function setFirstName (string $firstName) {
        $this->firstName = $firstName;
    }
    public function setPhone (int $phone) {
        $this->phone = $phone;
    }
    public function setEmNum (int $phone) {
        $this->emNum = $emNum;
    }
    public function setBirthDay (string $birthDay) {
        $this->birthDay = $birthDay;
    }
    public function setLevel (string $level) {
        $this->level = $level;
    }
    public function setEmail (string $email) {
        $this->email = $email;
    }
    public function setStatus (string $skillz) {
        $this->skillz = $skillz;
    }
    public function setSkillz (string $skillz) {
        $this->skillz = $skillz;
    }
    public function setStartinDay (string $startinDay) {
        $this->startinDay = $startinDay;
    }
}