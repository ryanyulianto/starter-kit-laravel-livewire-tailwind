<?php
namespace App\Services\User;

use Exception;
use App\Models\Auth\User;
use App\Enums\UserStatusEnum;
use Illuminate\Support\Facades\Log;
use App\Exceptions\HandledException;
use App\Services\User\UserInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService implements UserInterface
{
    
    public function login(
        string $identifier,
        string $credential,
        string $loginBy = 'email',
        bool $usePassword = true,
        bool $remember = false
    ) {
        try {
            $user = User::findBy($identifier, $loginBy)->first();
            if (!$user) {
                throw new HandledException('Akun tidak temukan !');
            }
            if ($usePassword && !Hash::check($credential, $user->password)) {
                throw new HandledException('Kredensial tidak valid!');
            }
            if (!$usePassword && !Hash::check($credential, $user->pin)) {
                throw new HandledException('Kredensial tidak valid!');
            }
            if ($user?->status !== UserStatusEnum::ACTIVE->value) {
                throw new HandledException('Akun tidak aktif!');
            }
            
            Auth::login($user, $remember);
            return $user;
        } catch (Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        } catch (HandledException $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

}