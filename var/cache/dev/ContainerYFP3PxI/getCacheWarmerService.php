<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_warmer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
    yield 0 => ($this->privates['router.cache_warmer'] ?? $this->load(__DIR__.'/getRouter_CacheWarmerService.php'));
    yield 1 => ($this->privates['annotations.cache_warmer'] ?? $this->load(__DIR__.'/getAnnotations_CacheWarmerService.php'));
    yield 2 => ($this->privates['twig.cache_warmer'] ?? $this->load(__DIR__.'/getTwig_CacheWarmerService.php'));
    yield 3 => ($this->privates['twig.template_cache_warmer'] ?? $this->load(__DIR__.'/getTwig_TemplateCacheWarmerService.php'));
    yield 4 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->load(__DIR__.'/getDoctrine_Orm_ProxyCacheWarmerService.php'));
}, 5));
