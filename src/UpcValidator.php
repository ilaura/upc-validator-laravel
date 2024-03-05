<?php

namespace Ilaura\UpcValidatorLaravel;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UpcValidator implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(!\Ilaura\UpcValidator\UpcValidator::validate($value)) {
            $fail('The :attribute must be a valid UPC.');
        }
    }
}