<?php

Namespace Calendar;

use App\Validator;

Class EventValidator extends Validator {

    /**
     * @param array $data
     * @return array|bool
     */
    public function validates(array $data) {
        parent::validates($data);
        $this->validate('name', 'minLength', 3);
        $this->validate('date', 'date');
        $this->validate('start', 'beforeTime', 'end');
        return $this->errors;
    }
    /**
     * @param array $status
     * @return array|bool
     */
    public function casevalidates(array $status) {
        parent::casevalidates($status);
        $this->casevalidate('status', 'hide', 'is_piblished');
        return $this->errors;
    }
}