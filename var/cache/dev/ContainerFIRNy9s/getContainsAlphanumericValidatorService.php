<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Validator\Constraints\ContainsAlphanumericValidator' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidator.php';
include_once $this->targetDirs[3].'\\src\\Validator\\Constraints\\ContainsAlphanumericValidator.php';

return $this->privates['App\\Validator\\Constraints\\ContainsAlphanumericValidator'] = new \App\Validator\Constraints\ContainsAlphanumericValidator();
