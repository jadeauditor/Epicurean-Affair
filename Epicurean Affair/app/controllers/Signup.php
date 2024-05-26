<?php

/**
 * home signup
 */
class Signup
{
    use Controller;

    public function index()
    {

        $this->view('signup/signup');
    }

}
