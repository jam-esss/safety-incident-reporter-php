<?php

namespace App\Classes;

class Validator
{
    private array $errors = [];

    public function validate(array $data, array $rules): bool
    {
        foreach ($rules as $field => $fieldRules) {
            foreach ($fieldRules as $rule) {
                $this->applyRule($field, $data[$field] ?? null, $rule);
            }
        }
        return empty($this->errors);
    }

    private function applyRule($field, $value, $rule)
    {
        if ($rule === 'required' && empty(trim($value ?? ''))) {
            $this->addError($field, "The $field field is required.");
        }

        if ($rule === 'email' && !empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->addError($field, "The $field must be a valid email address.");
        }

        if (str_starts_with($rule, 'max:')) {
            $max = (int) explode(':', $rule)[1];
            if (strlen($value ?? '') > $max) {
                $this->addError($field, "The $field cannot exceed $max characters.");
            }
        }
    }

    private function addError($field, $message)
    {
        $this->errors[$field] = $message;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}