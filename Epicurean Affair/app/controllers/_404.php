<?php 


class _404
{
	use Controller;
	
	public function index()
	{
		//echo "404 Page not found controller";

        $this->view('404/404');




	}
}
