<?php

/**
 * home signin
 */
class Signin
{
    use Controller;

    public function index()
    {

        $this->view('signin/signin');
    }

}
