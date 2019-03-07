<?php

class shopping2 extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $this->view('shopping2/index');
    }


    function add_address()
    {
      $this->model->add_address($_POST);
    }
}

?>