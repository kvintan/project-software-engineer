<?php

namespace App\View\Components;

use Closure;
use Livewire\Attributes\On;
use Illuminate\View\Component;
use App\Helpers\CartManagement;
use Illuminate\Contracts\View\View;

class navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public $total_count = 0;

    public function mount() {
        $this->total_count = count(CartManagement::getCartItemsFromCookie());
    }


    #[On('updateCartCount')]
    public function updateCartCount($total_count) {
        $this->total_count = $total_count;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
