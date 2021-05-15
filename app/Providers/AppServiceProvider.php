<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


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
        //
        Schema::defaultStringLength(191);


     /*    VerifyEmail::toMailUsing(function ($notifiable, $url){
            return (new MailMessage)
            ->subject('ایمیل فعال سازی حساب کاربری')
            ->view('front.mails.verification', compact('url'));


        });*/
    }
}
