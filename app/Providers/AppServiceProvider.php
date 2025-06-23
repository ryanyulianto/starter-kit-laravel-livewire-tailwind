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
            ->block('wrapper.first', 'fixed inset-0 bg-bg-4/70 transform transition-opacity')
            ->block('wrapper.second', 'fixed inset-0 z-50 w-screen overflow-y-auto')
            ->block('wrapper.third', 'mx-auto flex min-h-full w-full transform justify-center p-4')
            ->block('wrapper.fourth', 'bg-bg-1  flex w-full transform flex-col rounded-xl  text-left shadow-xl transition-all')
            ->block('title.wrapper', 'dark:border-b-border flex items-center justify-between border-b px-4 py-2.5')
            ->block('footer', 'dark:text-dark-300 dark:border-t-border flex justify-end gap-2 rounded-b-xl border-t p-4 text-gray-700')
            ->block('body', 'text-fg-2  py-5  px-4');

        TallStackUi::personalize('select.styled')
            ->block('input.wrapper.base', 'dark:text-dark-300 dark:bg-dark-800 dark:focus:ring-primary-600 dark:disabled:bg-dark-600 dark:ring-dark-600 flex w-full cursor-pointer items-center gap-x-2 rounded-md border-0 bg-white py-1.5 text-sm ring-1 ring-gray-300 disabled:bg-gray-100 disabled:text-gray-500 disabled:ring-gray-500')
            ->block('items.wrapper', 'truncate flex gap-2 flex-wrap');

        TallStackUi::personalize('slide')
            ->block('wrapper.first', 'fixed inset-0 bg-bg-4/70 transform transition-opacity')
            ->block('header', 'px-4 pb-4 border-b')
            ->block('wrapper.fifth', 'flex flex-col bg-bg-1 py-6 shadow-xl');

        TallStackUi::personalize('dialog')
            ->block('wrapper.third', 'relative w-full max-w-sm transform overflow-hidden bg-bg-1 rounded-xl p-4 text-left shadow-xl transition-all sm:my-8 ')
            ->block('background', 'fixed inset-0 bg-bg-4/70 transform transition-opacity');

        TallStackUi::personalize('form.upload')
            ->block('preview.backdrop', 'fixed left-0 top-0 z-50 flex h-full w-full items-center justify-center bg-bg-4/70');

        $this->_modifySidebarAndHeader();
    }

    private function _modifySidebarAndHeader()
    {
        TallStackUi::personalize('sideBar')
            ->block('desktop.wrapper.second', 'dark:bg-sidebar bg-sidebar dark:border-border flex grow flex-col gap-y-5 overflow-y-auto border-r-[1px] border-border px-2 pb-4')
            ->block('mobile.wrapper.fourth', 'dark:bg-sidebar bg-sidebar flex grow flex-col gap-y-5 overflow-y-auto overflow-x-hidden px-2 pb-4');
        TallStackUi::personalize('sideBar.item')
            ->block('item.state.current', 'text-primary-500 bg-primary-100 dark:bg-dark-700 dark:text-white');
        TallStackUi::personalize('layout.header')
            ->block('wrapper', 'dark:bg-sidebar/50 bg-sidebar/50 dark:border-border backdrop-blur-sm sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-300/10 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8');

    }
}
