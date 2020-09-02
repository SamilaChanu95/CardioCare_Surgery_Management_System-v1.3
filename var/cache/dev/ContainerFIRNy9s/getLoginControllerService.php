<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'HWI\Bundle\OAuthBundle\Controller\LoginController' shared service.

include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\Controller\\LoginController.php';

return $this->services['HWI\\Bundle\\OAuthBundle\\Controller\\LoginController'] = new \HWI\Bundle\OAuthBundle\Controller\LoginController(($this->services['security.authentication_utils'] ?? $this->load('getSecurity_AuthenticationUtilsService.php')), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['session'] ?? $this->load('getSessionService.php')), false, 'IS_AUTHENTICATED_REMEMBERED');
