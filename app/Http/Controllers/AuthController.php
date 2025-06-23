<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Exceptions\HandledException;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
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
            return redirect()->route('auth.login');
        } catch (Exception | HandledException $e) {
            report($e);
        }
    }
}
