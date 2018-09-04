<?php

namespace App\Providers;

use App\ContactInfo;
use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('layouts.footer', function ($view){
        $contact_info = ContactInfo::findOrFail(1);
        $view->with('contact_info', $contact_info);
      });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
