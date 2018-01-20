<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserChecker.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/UserAuthenticationProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/DaoAuthenticationProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/InMemoryUserProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Encoder/EncoderFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Encoder/EncoderFactory.php';

return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['security.user.provider.concrete.in_memory'] ?? $this->privates['security.user.provider.concrete.in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider()), new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array())), true);
