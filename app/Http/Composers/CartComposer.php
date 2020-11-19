<?php namespace App\Http\Composers;

use App\Classes\CartManager;
use Illuminate\Contracts\View\View;

class CartComposer
{
    protected $cartManager;

    public function __construct(
        CartManager $cartManager
    ) {
    
        $this->cartManager = $cartManager;
    }

    /**
     * Compose the count for cart views
     *
     * @param View $view
     * @return View
     */
    public function compose(View $view)
    {
        $cartCount = $this->cartManager->count();
        $cartContain = $this->cartManager->getCartContain();
        $cartSubTotal = $this->cartManager->subTotal();
        
        return $view->with(
            [
              'cartCount' => $cartCount,
              'cartContains' => $cartContain,
              'cartSubTotal' => $cartSubTotal
            ]
        );
    }
}
