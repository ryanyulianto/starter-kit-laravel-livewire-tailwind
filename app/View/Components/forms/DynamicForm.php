<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DynamicForm extends Component
{
    public $items;
    public $itemTitle;
    public $buttonText;
    public $wireModel;
    public $min;

    public function __construct($items = [], $itemTitle = 'Item', $buttonText = 'Tambah Item', $wireModel = 'items', $min = 1)
    {
        $this->items = $items;
        $this->itemTitle = $itemTitle;
        $this->buttonText = $buttonText;
        $this->wireModel = $wireModel;
        $this->min = $min;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.dynamic-form');
    }
}
