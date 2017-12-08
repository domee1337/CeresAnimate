<?php
namespace CeresAnimate\Providers;

use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

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
            $container->addScriptTemplate('CeresAnimate::content.CeresAnimate');
        }, self::PRIORITY);
    }
}
