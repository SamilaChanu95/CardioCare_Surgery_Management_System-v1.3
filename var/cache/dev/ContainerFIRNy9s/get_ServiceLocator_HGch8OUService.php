<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.hGch8OU' shared service.

return $this->privates['.service_locator.hGch8OU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'doctorRepository' => ['privates', 'App\\Repository\\DoctorRepository', 'getDoctorRepositoryService.php', true],
], [
    'doctorRepository' => 'App\\Repository\\DoctorRepository',
]);
