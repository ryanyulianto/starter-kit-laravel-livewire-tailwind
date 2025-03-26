<?php

namespace App\Providers;

use TallStackUi\Facades\TallStackUi;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $this->softPersonalisationTallstackUi();
    }
    private function softPersonalisationTallstackUi()
    {
        TallStackUi::personalize()
            ->select('styled')
            ->block('itens.wrapper', 'truncate flex gap-2 flex-wrap');
    }
}
