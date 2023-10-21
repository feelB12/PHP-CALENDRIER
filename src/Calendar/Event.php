<?php

Namespace Calendar ;

class Event {

    private $id;

    private $coach;

    private $name;

    private $descrption;

    private $start;

    private $end;

    private $created_at;

    public function getId(): int {
        return $this->id;
    }
    public function getCoach(): int {
        return $this->coach;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description ?? '';
    }

    public function getStart(): \DateTimeInterface {
        return new \DateTimeImmutable($this->start);
    }
    
    public function getEnd(): \DateTimeInterface {
        return new \DateTimeImmutable($this->end);
    }
    
    public function getCreated(): \DateTimeInterface {
        return new \DateTimeImmutable($this->created_at ?? '');
    }

    public function setCoach (int $coach) {
        $this->coach = $coach;
    }
    public function setName (string $name) {
        $this->name = $name;
    }
    public function setDescription (string $description) {
        $this->description = $description;
    }
    public function setStart (string $start) {
        $this->start = $start;
    }
    public function setEnd (string $end) {
        $this->end = $end;
    }
    public function setCreateded (string $created_at) {
        $this->created_at = $created_at;
    }
}