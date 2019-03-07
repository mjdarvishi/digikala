<?php

class model_register extends model
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }

    function check($form)
    {
        $email = $form['email'];
        $pass = $form['password'];
        $sql = "select * from tbl_user WHERE email=? AND password=?";
        $result = $this->select($sql, [$email, $pass]);
        print_r($result);
        if (sizeof($result) > 0) {
            Model::session_int();
            Model::session_set('userid',$result[0]['id']);
        } else
            return false;

    }

}


?>