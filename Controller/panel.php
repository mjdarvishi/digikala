<?php
class panel extends Controller{
public $check='';
    function __construct()
    {
        Model::session_int();
        $this->check=Model::session_get('userid');
        if ($this->check==false)
            header('location:'.Url3.'/login');
    }
    function index(){
        $this->view('panel/index');
    }
}


?>