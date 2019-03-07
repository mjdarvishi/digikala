<?php

class index extends Controller
{
    function __construct()
    {

    }


    function index()
    {
        $slider1=$this->model->getslider();
        $slider2=$this->model->getslider2();
        $sliderscorol=$this->model->getsliderscorole();
        $populer=$this->model->populer();
        $param=[$slider1,$slider2,$sliderscorol,$populer];
        $this->view('index/index',$param);



    }
}


?>