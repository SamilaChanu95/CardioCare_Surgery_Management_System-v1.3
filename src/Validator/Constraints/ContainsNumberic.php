<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsNumberic extends Constraint
{
    public $message = 'The "{{ string }}" is not validate Phone Number.';
}