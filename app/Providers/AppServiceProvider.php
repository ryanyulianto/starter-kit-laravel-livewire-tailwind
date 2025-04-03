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
        $this->softPersonalizationTallstackUi();
    }
    
    private function softPersonalizationTallstackUi()
    {
        TallStackUi::personalize('modal')
            // ->scope('fixed-scroll')
            // ->block('wrapper.second', 'fixed inset-0 z-50 w-screen h-screen')
            ->block('wrapper.second', 'fixed inset-0 z-50 w-screen h-screen')
            ->block('wrapper.third', 'mx-auto flex min-h-full w-full transform justify-center p-4')
            ->block('wrapper.fourth', 'dark:bg-dark-700 overflo flex w-full max-h-[95vh] transform flex-col rounded-xl bg-white text-left shadow-xl transition-all')
            ->block('body', 'dark:text-dark-300 overflow-y-auto max-h-[calc(95vh)] py-5 text-gray-700 px-4');

        TallStackUi::personalize('floating')
            ->block('wrapper', 'dark:bg-dark-700 border-dark-200 dark:border-dark-600 !relative !z-[99] rounded-lg border bg-white !left-0 !right-0 !top-[10px]');

        TallStackUi::personalize()
            ->form('input')
            ->block('input.color.base', 'ring-[var(--border)] text-[var(--fg-2)]')
            ->block('input.color.background', 'bg-[var(--input)] ring-[var(--ring)] text-[var(--input-fg)]')
            ->block('input.wrapper', 'flex rounded-md ring-1 !ring-[var(--border)] focus-within:ring-2 focus-within:!ring-[var(--ring)] focus-within:focus:ring-[var(--ring)] focus:ring-[var(--ring)] !shadow-none');
    }
}
