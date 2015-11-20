<?php namespace GLITwebsite\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$viewsThatNeedProgramArray = [
			'includes/navigation',
			'consumer_info/index',
		];
		$programsWithoutCosmo = [
			'includes/req_info_form',
			'pages/request_info',
			'pages/schedule_tour',
			'pages/apply_online'
		];
        View::composer($viewsThatNeedProgramArray, 'GLITwebsite\Composers\NavigationComposer');
		View::composer($programsWithoutCosmo, 'GLITwebsite\Composers\FormsComposer');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
