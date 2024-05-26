<?php

/**
 * home about
 */
class About
{
    use Controller;

    public function index()
    {

        $this->view('about/about');
    }

}
