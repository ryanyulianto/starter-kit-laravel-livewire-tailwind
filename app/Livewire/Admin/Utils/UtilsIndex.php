<?php

namespace App\Livewire\Admin\Utils;

use Livewire\Component;

class UtilsIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.utils.utils-index');
    }


    public function loadingButton()
    {
        sleep(20);
    }
}
