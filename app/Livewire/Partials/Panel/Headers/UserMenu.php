<?php

namespace App\Livewire\Partials\Panel\Headers;

use Exception;
use Livewire\Component;
use App\Models\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Exceptions\HandledException;
use Illuminate\Support\Facades\Auth;

class UserMenu extends Component
{
    public function render()
    {
        return view('livewire.partials.panel.headers.user-menu');
    }

}
