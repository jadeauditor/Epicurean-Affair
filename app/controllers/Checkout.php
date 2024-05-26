<?php 


class Checkout
{
	use Controller;
	
	public function index()
	{
		//echo "404 Page not found controller";

        $this->view('checkout/checkout');




	}
}
