<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\CartManagement;
use App\View\Components\navbar;
use Illuminate\Support\Facades\Log;

class ProductsPage extends Component
{
    public $cartCountElement;

    public function mount()
    {   
        $this->cartCountElement = count(CartManagement::getCartItemsFromCookie());
    }

    public function addToCart($product_id)
    {
        // $total_count = CartManagement::addItemToCart($product_id);
        // $this->cartCountElement = $total_count;
        // $this->emit('updateCartCount', $total_count);
        dd($product_id);
    }

    public function render()
    {
        return view('components.menu', [
            'cartCountElement' => $this->cartCountElement,
        ]);
    }
}
