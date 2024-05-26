<?php

/**
 * home contact
 */
class Contact
{
    use Controller;

    public function index()
    {

        $this->view('contact/contact');
    }

}
