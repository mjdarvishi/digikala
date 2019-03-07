<?php

class login extends Controller
{
    function __construct()
    {

        parent::__construct();
    }

    function index()
    {
        $this->view('login/index');
    }

    function check()
    {
        $info =$_POST;
        $this->model->check($info);
        Model::session_int();
        $check=Model::session_get('userid');
        if ($check==false)
            header('location:'.URL3.'login');
        else
            header('location:'.URL3.'panel');

    }
}

?>