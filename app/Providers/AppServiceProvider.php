<?php

namespace App\Providers;

use TallStackUi\Facades\TallStackUi;
use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;
use App\Providers\TelescopeServiceProvider;

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
        if (config('app.env') !== 'local') {
            $this->authorizationLogViewer();
        }
    }

    private function authorizationLogViewer()
    {
        LogViewer::auth(function ($request) {
            return $request->user()
                && in_array($request->user()->email, [
                    'yuliantoryan64@gmail.com',
                ]);
        });
    }


    private function softPersonalizationTallstackUi()
    {
        TallStackUi::personalize('modal')
            ->block('wrapper.first', 'fixed inset-0 bg-[var(--bg-4)]/70 transform transition-opacity')
            ->block('wrapper.second', 'fixed inset-0 z-50 w-screen h-screen')
            ->block('wrapper.third', 'mx-auto flex min-h-full w-full transform justify-center p-4')
            ->block('wrapper.fourth', 'bg-[var(--bg-1)]  flex w-full max-h-[95vh] transform flex-col rounded-xl  text-left shadow-xl transition-all')
            ->block('body', 'text-[var(--fg-2)] overflow-y-auto max-h-[calc(95vh)] py-5  px-4');

        // TallStackUi::personalize('floating')
        //     ->block('wrapper', 'bg-[var(--input)] border-dark-200 dark:border-dark-600 !relative !z-[99] rounded-lg border !left-0 !right-0 !top-[10px]');

        TallStackUi::personalize('select.styled')
            ->block('floating.default', 'bg-[var(--input)] border-dark-200 dark:border-dark-600 !relative !z-[99] rounded-lg border !left-0 !right-0 !top-[10px]')
            ->block('input.wrapper.base')
            ->replace('dark:bg-dark-800', 'bg-[var(--input)]')
            ->replace('bg-white', 'bg-[var(--input)]');

        TallStackUi::personalize()
            ->form('input')
            ->block('input.color.base', 'ring-[var(--border)] text-[var(--fg-2)]')
            ->block('input.color.background', 'bg-[var(--input)] ring-[var(--ring)] text-[var(--input-fg)]')
            ->block('input.wrapper', 'flex rounded-md ring-1 !ring-[var(--border)] focus-within:ring-2 focus-within:!ring-[var(--ring)] focus-within:focus:ring-[var(--ring)] focus:ring-[var(--ring)] !shadow-none');
    }
}
