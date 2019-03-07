<?php

class Controller
{
    function __construct()
    {

    }

    function view($viewUrl,$param=[],$no='')
    {
        if ($no=='1'){
            require('Veiw/'.$viewUrl.'.php');
        }else{
        require('header.php');
        require('Veiw/'.$viewUrl.'.php');
        require('footer.php');
        }
    }

    function model($modelurl)
    {
        require('Model/model_'.$modelurl.'.php');
        $classname='model_'.$modelurl;
        $this->model=new $classname;

    }
}


?>