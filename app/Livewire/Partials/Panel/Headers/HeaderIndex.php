<?php

namespace App\Livewire\Partials\Panel\Headers;

use Exception;
use Livewire\Component;
use App\Models\Auth\User;
use Illuminate\Support\Facades\DB;
use App\Exceptions\HandledException;
use Illuminate\Support\Facades\Auth;
use App\Models\Information\Notification;
use App\Traits\HandleInteraction;

class HeaderIndex extends Component
{
    use HandleInteraction;
    public function render()
    {
        return view('livewire.partials.panel.headers.header-index');
    }
    public function getCountNotificationProperty()
    {
        return Notification::latest()->count();
    }
    public function logout()
    {
        try {
            $user = User::find(Auth::id());
            DB::transaction(function () use ($user) {
                $user->update([
                    'fcm_web_token' => null
                ]);
                Auth::logout();
            });
            $this->redirect(route('auth.login'));
        } catch (Exception | HandledException $e) {
            report($e);
            return $this->toastError($e);
        }
    }
}
