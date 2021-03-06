<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'HWI\Bundle\OAuthBundle\Controller\ConnectController' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\Controller\\ConnectController.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\Security\\Http\\ResourceOwnerMapLocator.php';

$a = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMapLocator();
$a->add('main', ($this->services['hwi_oauth.resource_ownermap.main'] ?? $this->getHwiOauth_ResourceOwnermap_MainService()));

$this->services['HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController'] = $instance = new \HWI\Bundle\OAuthBundle\Controller\ConnectController(($this->privates['hwi_oauth.security.oauth_utils'] ?? $this->getHwiOauth_Security_OauthUtilsService()), $a);

$instance->setContainer($this);

return $instance;
