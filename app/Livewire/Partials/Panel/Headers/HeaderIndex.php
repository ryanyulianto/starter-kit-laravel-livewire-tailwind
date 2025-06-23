<?php

namespace App\Livewire\Partials\Panel\Headers;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Information\Notification;

class HeaderIndex extends Component
{
    public function render()
    {
        return view('livewire.partials.panel.headers.header-index');
    }
    public function getCountNotificationProperty(){
        return Notification::latest()->count();
    }
}
