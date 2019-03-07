<?php

class shopping extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $basket = $this->model->getbasket();
        $data = ['basket' => $basket[0],'price'=>$basket[1]];
        $this->view('shopping/index', $data);
    }

    function deletebasket($proid)
    {
        $this->model->delete($proid);
        $basket = $this->model->getbasket();
        echo json_encode($basket);

    }
    function update(){

        $basket = $this->model->update($_POST);
        $basket = $this->model->getbasket();
        echo json_encode($basket);
    }

}

?>