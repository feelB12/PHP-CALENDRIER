<?php

Namespace App;

Class Validator {

    private $data;
    private $status;
    private $length;
    protected $errors = [];

    public function __construct(array $data = [], array $status = [] )
    {
        $this->data = $data;
        $this->status = $status;
    }
   
    /**
     * @param array $date
     * @return array|bool
     */
    public function validates(array $data) {
        $this->errors = [];
        $this->data = $data;
        return $this->errors;
    }
    /**
     * @param array $status
     * @return array|bool
     */
    public function casevalidates(array $status) {
        $this->errors = [];
        $this->status = $status; 
        return $this->errors;
    }

    public function validate(string $field, string $method, ...$parameters): bool {
        if (!isset($this->data[$field])) {
            $this->errors[$field] = "Le champs $field n'est pas rempli";
            return false;
        } else {
            return call_user_func([$this, $method], $field, ...$parameters);
        }
    }
    public function casevalidate(string $field, string $method, ...$parameters): bool {
        if (!isset($this->status[$field])) {
            $this->errors[$field] = "La case choix de publication $field n'a pas été cocher";
            return false;
        } else {
            return call_user_func([$this, $method], $field, ...$parameters);
        }
    }

    public function minLength(string $field, int $length): bool {
        if (mb_strlen($field)< $length) {
            $this->errors[$field] = "Le champs doit avoir plus de $length caractères";
            return false;
        }
        return true;
    }

    public function date (string $field): bool {
        if (\DateTime::createFromFormat('Y-m-d', $this->data[$field]) === false) {
            $this->errors[$field] = "La date ne semble pas valide ";
            return false;
        }
        return true;
    }

    public function time (string $field): bool {
        if (\DateTime::createFromFormat('H:i', $this->data[$field]) === false) {
            $this->errors[$field] = "Le Temps ne semble pas valide ";
            return false;
        }
        return true;
    }
    public function hide (string $field): bool {
        if (\DateTime::createFromFormat('H:i', $this->status[$field]) === false) {
            $this->errors[$field] = "La case $field n'est pas coché ";
            return false;
        }
        return true;
    }

    /**
     * s'assure que le début n'est pas supérieur à la fin. 
     * @param string $startField
     * @param string $endtField
     * @param \DateTimeInterface $start
     * @param \DateTimeInterface $end
     * @throws \Exception
     */


    public function beforeTime (string $startField, string $endField){
        if ($this->time($startField) && $this->time($endField)) {
            $start = \DateTimeImmutable::createFromFormat('H:i', $this->data[$startField]);
            $end = \DateTimeImmutable::createFromFormat('H:i', $this->data[$endField]);
            if ($start->getTimestamp() > $end->getTimestamp()) {
                $this->errors[$startField] = "Le temps doit être inférieur au temps de fin";
                return false;
            }
            return true;
        }  
        return false;
    }
}