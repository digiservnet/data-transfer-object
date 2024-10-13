<?php

namespace Digiservnet\DataTransferObject;

use Digiservnet\DataTransferObject\Validation\ValidationResult;

interface Validator
{
    public function validate(mixed $value): ValidationResult;
}
