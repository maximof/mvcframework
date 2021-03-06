<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;
use App\Utilities\View;
use App\Auth\Auth;
use App\Session\FlashSession;
use App\Security\Csrf;

class ViewShareServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    /**
     * {@inheritdoc}
     *
     * @see \League\Container\ServiceProvider\BootableServiceProviderInterface
     */
    public function boot()
    {
        $container = $this->getContainer();

        $container->get(View::class)->share([
            'auth' => $container->get(Auth::class),
            'config' => $container->get('config'),
            'flash' => $container->get(FlashSession::class),
            'csrf' => $container->get(Csrf::class),
        ]);
    }

    /**
     * {@inheritdoc}
     *
     * @see \League\Container\ServiceProvider\AbstractServiceProvider
     * @see \League\Container\ServiceProvider\ServiceProviderInterface
     */
    public function register()
    {
        //
    }
}
