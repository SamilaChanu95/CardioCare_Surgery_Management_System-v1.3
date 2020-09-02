<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsAlphabetic extends Constraint
{
    public $message = 'The "{{ string }}" is not validate name.';
}