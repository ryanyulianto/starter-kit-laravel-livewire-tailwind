<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Exceptions\HandledException;

class DashboardIndex extends Component
{

    public array $inputs = [];
    public function mount()
    {
        try {
            throw new HandledException('halo');
        } catch (HandledException $e) {
            Log::error($e->getMessage());
        }
        $this->addInput();
    }

    public function addInput()
    {
        $this->inputs[] = ['name' => '', 'year' => ''];
    }

    public function removeInput($index)
    {
        if (count($this->inputs) > 1) {
            unset($this->inputs[$index]);
        }
        $this->inputs = array_values($this->inputs);
    }

    public function render()
    {
        return view('livewire.admin.dashboard.dashboard-index');
    }
}
