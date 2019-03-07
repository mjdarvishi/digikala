<?php

class product extends Controller
{

    function __construct()
    {
    }

    function index($id)
    {
        $product_info = $this->model->product_info($id);

        $product_info1 = $this->model->getsliderscorole();
        $product_info2 = $this->model->get_gallery($id);
        $param = [$product_info, $product_info1,$product_info2,'idpro'=>$id];
        $this->view('product/index', $param);

    }

    function tab($id, $idcat)
    {
        $num = $_POST['num'] + 1;
        $naghd = $this->model->cash($id);
        $fani = $this->model->fani($idcat, $id);
        $comment = $this->model->comment($idcat, $id);
        $sug = $this->model->sugestion($id);
        $question = $this->model->getquestion($id);
        $data = [];

        if ($num == 1) {
            $data = $naghd;
            $this->view('product/tab'.$num, $data, 1);
        }
        if ($num == 2) {
            $data = $fani;

            $this->view('product/tab'.$num, $data, 1);
        }
        if ($num == 3) {
            $data = [$comment, $sug];
            $this->view('product/tab'.$num, $data, 1);
        }
        if ($num == 4) {
            $data = $question;
            $this->view('product/tab'.$num, $data, 1);
        }

    }
    function addtobasket($proid){
         $this->model->addtobasket($proid);
    }

}


?>