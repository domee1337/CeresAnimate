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
		$this->getApplication()->register(CeresAnimateRouteServiceProvider::class);
	}
}
