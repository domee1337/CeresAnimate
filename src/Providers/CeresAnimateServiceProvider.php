<?php
namespace CeresAnimate\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class CeresAnimateServiceProvider
 * @package CeresAnimate\Providers
 */
class CeresAnimateServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		
	}
	public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container)
        {
            // The script is imported in the Footer.twig of Ceres
            $container->addScriptTemplate('Theme::content.CeresAnimate');
        }, self::PRIORITY);
    }
}
