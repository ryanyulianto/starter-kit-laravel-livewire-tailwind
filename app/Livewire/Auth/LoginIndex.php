<?php

namespace App\Livewire\Auth;

use Exception;
use App\Enums\RoleEnum;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Log;
use App\Exceptions\HandledException;
use App\Services\User\UserInterface;
use TallStackUi\Traits\Interactions;

#[Layout('components.layouts.auth')]
class LoginIndex extends Component
{

    use Interactions;
    public $email;
    public $password;
    public $remember = false;

    protected $userService;
    public function boot(
        UserInterface $userService
    ) {
        $this->userService = $userService;
    }

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }
    public function render()
    {
        return view('livewire.auth.login-index');
    }
    public function login()
    {
        $this->validate();
        try {
            $user = $this->userService->login(identifier: $this->email, credential: $this->password, remember: $this->remember);
            if ($user?->hasRole(RoleEnum::ADMIN->value)) {
                $this->redirect(route('admin.dashboard'));
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $this->toast()->error('Gagal', 'Terjadi Kesalahan Saat Login')->send();
        } catch (HandledException $e) {
            $this->toast()->error('Gagal', $e->getMessage())->send();
        }
    }
}
