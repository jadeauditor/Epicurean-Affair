<?php 


class Shop
{
	use Controller;
	
	public function index()
	{
		//echo "404 Page not found controller";

        $this->view('shop/shop');




	}
}
