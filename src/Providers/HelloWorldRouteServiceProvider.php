<?php
namespace CeresAnimate\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class CeresAnimateRouteServiceProvider
 * @package CeresAnimate\Providers
 */
class CeresAnimateRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('hello', 'CeresAnimate\Controllers\ContentController@sayHello');
	}

}
