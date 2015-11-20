<?php namespace GLITwebsite\Providers;

use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Cookie;
use Session;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if(isset($_GET["utm_source"])){
			$source = $_GET["utm_source"];
		}
		if(isset($_GET["utm_medium"])){
			$medium = $_GET["utm_medium"];
		}
		$expire = time()+60*60*24*30;

		if(isset($source)){
			setcookie($source, $medium, $expire);
		}

		// Get cookie and push to session
		if(Cookie::get('dex')) Session::set('dex', Cookie::get('dex'));
		if(Cookie::get('YouTube')) Session::set('YouTube', Cookie::get('dex'));
		if(Cookie::get('Facebook')) Session::set('Facebook', Cookie::get('dex'));
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'GLITwebsite\Services\Registrar'
		);
	}

}
