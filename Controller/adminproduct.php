<?php

class adminproduct extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if (isset($_POST['id'])) {
           $this->model->omite($_POST);

        }
        $allproduct = $this->model->getproduct();
        $data = ['products' => $allproduct];
        $this->view('admin/product/index', $data);

    }

    function add($parentid='')
    {


        if (isset($_POST['title'])) {
            $this->model->add($_POST,$parentid,$_FILES['image']);
        }
        $cat = $this->model->get_category();
        $color = $this->model->get_color();
        $gar = $this->model->get_garanti();
        $info=$this->model->getproinfo($parentid);
        $data = ['cat' => $cat, 'gar' => $gar,'color'=>$color,'info'=>$info];
        $this->view('admin/product/add', $data);
    }


    function naghd($id){
        if (isset($_POST['id'])) {
            $this->model->omite1($_POST);

        }
        $naghdha=$this->model->get_naghd($id);
        $info=$this->model->getproinfo($id);
        $data=['naghd'=>$naghdha,'idpro'=>$id,'info'=>$info];
        $this->view('admin/product/naghd', $data);
    }
    function addnaghd($id,$idnaghd=''){

        if (isset($_POST['title'])) {
        $this->model->addnaghd($_POST,$id,$idnaghd);
            header('location:'.URL3.'adminproduct/naghd/'.$id);

        }

        $info=$this->model->getproinfo($id);
        $naghd1=$this->model->get_pronaghd($idnaghd);
        if (isset($naghd1[0]))
            $naghd1=$naghd1[0];
        $data=['info'=>$info,'naghd'=>$naghd1];

        $this->view('admin/product/addnaghd', $data);
    }

    function attr($id){

        if (isset($_POST['sube'])){
           $this->model->in($_POST,$id);

        }
       $attr= $this->model->get_attr_pro($id);
        $proattr= $this->model->get_p($id);
        $data=['attr'=>$attr['attr'],'proinfo'=>$attr['proinfo'],'pro_attr'=>$proattr];
        $this->view('admin/product/attr', $data);
    }
    function gallery($idpro){
        if (isset($_FILES['image']['name'])) {
            $this->model->store($idpro,$_FILES['image']);
        }
        if (isset($_POST['id'])) {
            $this->model->dell($_POST['id'],$idpro);
        }
        $gallery= $this->model->get_gallery($idpro);
        $data=['gallery'=>$gallery];
        $this->view('admin/product/gallery', $data);
    }
}


?>