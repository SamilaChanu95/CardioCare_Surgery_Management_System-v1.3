<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'captcha.validator' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidator.php';
include_once $this->targetDirs[3].'\\vendor\\captcha-com\\symfony-captcha-bundle\\Validator\\Constraints\\ValidCaptchaValidator.php';

return $this->services['captcha.validator'] = new \Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidCaptchaValidator($this);