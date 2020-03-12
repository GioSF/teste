<?php

/**
 * @version 1.0
 * @copyright (c) 2020 Kamego
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CurrencyServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	 public function register()
	{
		//
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	 public function boot()
	{
		$this->publishes([
			__DIR__.'/../config/subscriptions.php' => config_path('subscriptions.php')
		]);
	}
}
