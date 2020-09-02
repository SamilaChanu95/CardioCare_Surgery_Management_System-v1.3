<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hwi_oauth.resource_owner.github' shared service.

include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwnerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwner\\AbstractResourceOwner.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwner\\GitHubResourceOwner.php';

return $this->services['hwi_oauth.resource_owner.github'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\GitHubResourceOwner(($this->privates['hwi_oauth.http_client'] ?? $this->load('getHwiOauth_HttpClientService.php')), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), ['client_id' => $this->getEnv('GITHUB_ID'), 'client_secret' => $this->getEnv('GITHUB_SECRET'), 'paths' => [], 'options' => []], 'github', ($this->privates['hwi_oauth.storage.session'] ?? $this->load('getHwiOauth_Storage_SessionService.php')));