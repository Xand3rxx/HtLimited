<?php

namespace App\Providers;

use Harimayco\Menu\Models\Menus;
use Harimayco\Menu\Models\MenuItems;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Paginator::useBootstrap();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Verify Email Address')
                ->line('Click the button below to verify your email address.')
                ->action('Verify Email Address', $url);
        });

        config([
            'site-settings' => \App\Models\Setting::first() ?? config('site-settings'),
        ]);

        view()->composer('layouts.admin', function ($view) {
            $view->with([
                'profile'   =>  \App\Models\User::where('id', auth()->user()->id)->first(),
            ]);
        });

        view()->composer('layouts.partials._frontend_navbar', function ($view) {
            $menu = Menus::where('id', 1)->with('items')->first();

            //or you can convert it to array
            $public_menu = $menu->items->toArray();

            $view->with([
                'mainMenu'   =>  $public_menu,
            ]);
        });
    }
}
