<?php

class admincategory extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->children(0);

    }

    function children($idcat)
    {
        $child = $this->model->get_children($idcat);
        $parents = $this->model->parents($idcat);
        $data = ['category' => $child, 'parents' => $parents];
        $this->view('admin/category/index', $data);
    }

    function add($parentid = 0, $edit = '')
    {


        if (isset($_POST['title'])) {
            $this->model->add($_POST['title'], $_POST['parent'], $edit, $parentid);
        }
        $cat = $this->model->get_category();
        if ($edit != '') {

            $data = ['cat' => $cat, 'par' => $parentid, 'edit' => true];

        } else {
            $data = ['cat' => $cat, 'par' => $parentid];
        }
        $this->view('admin/category/add', $data);
    }

    function omitecat()
    {
        $id = $_POST['id'];
        $this->model->omite($id);
        $this.$this->children(0);

    }

    function showattr($idcat, $attrid = 0)
    {
        if (isset($_POST['id'])){
            $this->model->omit_attr($_POST);
            print_r($_POST);
        }
        $attr = $this->model->get_attr($idcat, $attrid);
        $catinfo = $this->model->get_catinfo($idcat);
        $attrinfo = $this->model->get_attrinfo($attrid);
        $data = ['attr' => $attr, 'idcat' => $idcat, 'catinfo' => $catinfo, 'attrinfo' => $attrinfo];
        $this->view('admin/category/showattr', $data);
    }

    function addattr($info = '')
    {
        if (isset($_POST['title'])) {
            $this->model->addattr($_POST['title'], $_POST['idcat'], $_POST['parent'],$info);
        }

        $info = $this->model->get_info($info);
        $attr = $this->model->get_allattr();
        $cat = $this->model->get_category();
        $data = ['attr' => $attr, 'cat' => $cat,'info'=>$info];
        $this->view('admin/category/addattr', $data);
    }

}


?>