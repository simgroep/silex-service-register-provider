<?php
namespace MJanssen\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use stdClass;

/**
 * Class ServiceProvider
 * @package MJanssen\Provider
 */
class ServiceProviderFoo implements ServiceProviderInterface
{
    /**
     * @param Application $app
     */
    public function register(Application $app)
    {
        $app['foo'] = $app->share(function($app) {
            return new stdClass();
        });
    }

    /**
     * @param Application $app
     */
    public function boot(Application $app)
    {
    }
}