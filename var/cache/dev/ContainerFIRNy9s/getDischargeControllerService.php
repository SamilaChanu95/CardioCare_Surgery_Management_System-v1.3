<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\DischargeController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\DischargeController.php';

$this->services['App\\Controller\\DischargeController'] = $instance = new \App\Controller\DischargeController();

$instance->setContainer(($this->privates['.service_locator.E18xQID'] ?? $this->load('get_ServiceLocator_E18xQIDService.php'))->withContext('App\\Controller\\DischargeController', $this));

return $instance;