<?php

Namespace Calendar ;

class Coach {

    private $id;

    private $name;

    private $firstName;

    private $phone;

    private $emNum;

    private $birthDay;

    private $startinDay;

    private $level;

    private $email;

    private $skillz;

    private $idPhoto;

    private $proCard;

    private $bif;

    private $cqp;

    private $dejeps;

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
    
    public function getStartinDay(): \DateTimeInterface {
        return new \DateTimeImmutable($this->startinDay ?? '');
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

    public function getIdPhoto(): ?string {
        return $this->idPhoto;
    }

    public function getProCard(): ?string {
        return $this->proCard;
    }

    public function getBif(): ?string {
        return $this->bif;
    }

    public function getCqp(): ?string {
        return $this->cqp;
    }
    public function getDejeps(): ?string {
        return $this->dejeps;
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
    public function setStartinDay (string $startinDay) {
        $this->startinDay = $startinDay;
    }
    public function setLevel (string $level) {
        $this->level = $level;
    }
    public function setEmail (string $email) {
        $this->email = $email;
    }
    public function setSkillz (string $skillz) {
        $this->skillz = $skillz;
    }
    public function setIdPhoto(?string $idPhoto): self {
        $this->idPhoto = $idPhoto;
        return $this;
    }
    public function setProCard(?string $proCard): self {
        $this->proCard = $proCard;
        return $this;
    }
    public function setBif(?string $bif): self {
        $this->bif = $bif;
        return $this;
    }
    public function setCqp(?string $cqp): self {
        $this->cqp = $cqp;
        return $this;
    }
    public function setDejeps(?string $dejeps): self {
        $this->dejeps = $dejeps;
        return $this;
    }
}