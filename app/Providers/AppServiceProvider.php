<?php

namespace App\Providers;

use App\Services\SettingService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
        config()->set(\App\Services\SettingService::toArray());
        config("mail.mailers.smtp.host", SettingService::get("smtp", "host"));
        config("mail.mailers.smtp.port", SettingService::get("smtp", "port"));
        config("mail.mailers.smtp.username", SettingService::get("smtp", "username"));
        config("mail.mailers.smtp.password", SettingService::get("smtp", "password"));
        config("mail.mailers.smtp.encryption", SettingService::get("smtp", "encryption"));
        config("mail.mailers.smtp.from.address", SettingService::get("smtp", "from_address"));
        config("mail.mailers.smtp.from.name", SettingService::get("smtp", "from_name"));
        config("mail.mailers.smtp.reply_to.address", SettingService::get("smtp", "reply_address"));
    }
}
