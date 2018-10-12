<?php

namespace App\Providers;

use App\ContactInfo;
use App\Role;
use Illuminate\Support\Facades\Auth;
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

        view()->composer('layouts.menu', function ($view){
            $menus = array(
                "home" => "Home",
                "exclusive.index" => "Exclusive",
                "showing.index" => "Showing",
                "offer.index" => "Offer",
                "request.index" =>"Request",
                "contact.index" =>"Contact",
                "about.index" => "About Us");
            $view->with(['menus' => $menus, 'isCustomer' => @Auth::user()->role == Role::CUSTOMER]);
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
