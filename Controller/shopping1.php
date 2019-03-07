<?php

class shopping1 extends Controller
{
    function __construct()
    {
        Model::session_int();
        $check = Model::session_get('userid');
        if ($check!=false){
            header('location:'.URL3.'shopping2');
        }
    }

    function index()
    {
        $this->view('shopping1/index');
    }
}

?>