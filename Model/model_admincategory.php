<?php

class model_admincategory extends model
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }

    function get_category()
    {
        $sql = "select * from tbl_category ";

        return $result = $this->select($sql);
    }

    function get_children($parent)
    {
        $sql = "select * from tbl_category where parent=? ";

        return $result = $this->select($sql, [$parent]);
    }

    function parents($parent)
    {
        $result = [];
        $parentFild = $parent;
        while ($parentFild != 0) {
            $sql = "select * from tbl_category where id=? ";
            $result1 = $this->select($sql, [$parentFild], 1);
            array_push($result, $result1['title']);
            $parentFild = $result1['parent'];
        }

        return $result;
    }

    function add($title, $id, $edit, $i)
    {
        if ($edit == '') {
            $sql = "insert into tbl_category (title,parent) VALUES  (?,?)";
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $id);
            $stmt->execute();
        } else {
            $sql = "update tbl_category set title=?,parent=? WHERE id=?";
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $id);
            $stmt->bindValue(3, $i);
            $stmt->execute();
        }
    }

    function omite($id = [])
    {

        if ($id != []) {
            foreach ($id as $row) {
                $sql = "delete from tbl_category where id=?";
                $stmt = self::$conn->prepare($sql);
                $stmt->bindValue(1, $row);
                $stmt->execute();

                $this->omiteunder($row);
            }
        }

    }

    function omiteunder($id)
    {

        $sql1 = "select tbl_category.id from tbl_category where parent=?";
        $result1 = $this->select($sql1, [$id]);
        if ($result1 != []) {
            foreach ($result1 as $row) {
                $this->omite($row);
            }
        }

    }

    function get_attr($id, $attrid)
    {
        $sql1 = "select * from tbl_attr where idcat=? and parent=?";

        return $result1 = $this->select($sql1, [$id, $attrid]);
    }

    function get_catinfo($id)
    {
        $sql1 = "select * from tbl_category where id=? ";

        return $this->select($sql1, [$id], 1);
    }

    function get_attrinfo($id)
    {
        $result = [];
        if ($id == 0) {

        } else {
            $sql1 = "select * from tbl_attr where id=? ";
            $result = $this->select($sql1, [$id], 1);
        }


        return $result;

    }
    function get_allattr(){
        $sql1 = "select * from tbl_attr where parent=0 ";
      return  $result = $this->select($sql1);
    }
    function addattr($title, $id,$parent,$info)
    {


           if ($info==''){
               $sql = "insert into tbl_attr (title,idcat,parent) VALUES  (?,?,?)";
               $stmt = self::$conn->prepare($sql);
               $stmt->bindValue(1, $title);
               $stmt->bindValue(2, $id);
               $stmt->bindValue(3, $parent);
               $stmt->execute();
           }else
           {
               $sql = "update tbl_attr set title=?,idcat=?,parent=? WHERE id=?";
               $stmt = self::$conn->prepare($sql);
               $stmt->bindValue(1, $title);
               $stmt->bindValue(2, $id);
               $stmt->bindValue(3, $parent);
               $stmt->bindValue(4, $info);
               $stmt->execute();
           }

    }
    function get_info($id){
        $sql1 = "select * from tbl_attr where id=? ";
       return $attr = $this->select($sql1,[$id],1);




    }
    function omit_attr($id=[]){
        if ($id != []) {
            $id=$id['id'];
            foreach ($id as $row) {
                $sql = "delete from tbl_attr where id=?";
                $stmt = self::$conn->prepare($sql);
                $stmt->bindValue(1, $row);
                $stmt->execute();
                $this->omiteunder1($row);

            }
        }

    }
    function omit_attr2($id=[]){
        if ($id != []) {
            foreach ($id as $row) {
                $sql = "delete from tbl_attr where id=?";
                $stmt = self::$conn->prepare($sql);
                $stmt->bindValue(1, $row);
                $stmt->execute();
                $this->omiteunder1($row);

            }
        }

    }

    function omiteunder1($id)
    {

        $sql1 = "select tbl_attr.id from tbl_attr where parent=?";
        $result1 = $this->select($sql1, [$id]);
        if ($result1 != []) {
            foreach ($result1 as $row) {
                $this->omit_attr2($row);
            }
        }

    }


}


?>