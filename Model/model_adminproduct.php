<?php

class model_adminproduct extends model
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }

    function getproduct()
    {
        $sql = "select * from tbl_product";

        return $this->select($sql);
    }


    function add($data, $parentid, $file = [])
    {
        var_dump($file);
        $title = $data['title'];
        $price = $data['price'];
        $num = $data['num_ex'];
        $discount = $data['discount'];
        $special = $data['special'];
        $catid = $data['catid'];
        $introduction = $data['introduction'];
        $color = join(',', $data['color']);
        $garanti = join(',', $data['garanti']);
        if ($parentid == '') {
            $valu = [$title, $price, $discount, $num, $special, $catid, $introduction, $color, $garanti];
            $sql = "insert into tbl_product (title,price,discount,num_ex,special,idcat,introduction,colors,garanty) VALUES(?,?,?,?,?,?,?,?,?)";
            $this->insert($sql, $valu);
            $productid = self::$conn->lastInsertId();
            mkdir('Public/images/products/' . $productid);
        } else {
            $valu = [$title, $price, $discount, $num, $special, $catid, $introduction, $color, $garanti, $parentid];
            $sql = "update tbl_product set title=?,price=?,discount=?,num_ex=?,special=?,idcat=?,introduction=?,colors=?,garanty=? where id=?";
            $this->insert($sql, $valu);
        }


        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $target = 'Public/images/products/' . $parentid . '/product.' . $ext;
        move_uploaded_file($file['tmp_name'], $target);


    }

    function get_category()
    {
        $sql = "select * from tbl_category ";

        return $result = $this->select($sql);
    }

    function get_color()
    {
        $sql = "select * from tbl_color ";

        return $result = $this->select($sql);
    }

    function get_garanti()
    {
        $sql = "select * from tbl_garanty ";

        return $result = $this->select($sql);
    }

    function getproinfo($proid)
    {
        $sql = "select * from tbl_product where id=?";
        $result = $this->select($sql, [$proid], 1);
        $color = explode(',', $result['colors']);
        $gar = explode(',', $result['garanty']);
        $result['colorinfo'] = [];
        $result['garinfo'] = [];
        foreach ($color as $row) {
            $sql = "select * from tbl_color where id=?";
            $colorinfo = $this->select($sql, [$row], 1);
            array_push($result['colorinfo'], $colorinfo);
        }
        foreach ($gar as $row) {
            $sql = "select * from tbl_garanty where id=?";
            $colorinfo = $this->select($sql, [$row], 1);
            array_push($result['garinfo'], $colorinfo);
        }

        return $result;
    }

    function get_naghd($id_pro)
    {
        $sql = "select * from tbl_cash where idp=? ";

        return $result = $this->select($sql, [$id_pro]);
    }

    function addnaghd($data = [], $parentid, $naghdid = '')
    {

        $title = $data['title'];
        $introduction = $data['introduction'];
        if ($naghdid != '') {
            $sql = "update tbl_cash set title=?,explanation=?idp=? where id=?";
            $valu = [$title, $introduction, $parentid, $naghdid];
            $this->insert($sql, $valu);

        } else {
            $sql = "insert into tbl_cash (title,explanation,idp) VALUES(?,?,?)";
            $valu = [$title, $introduction, $parentid];
            $this->insert($sql, $valu);
        }
    }

    function get_pronaghd($id)
    {
        $sql = "select * from tbl_cash where id=? ";

        return $result = $this->select($sql, [$id]);
    }

    function omite($id = [])
    {

        if ($id != []) {
            $id = $id['id'];
            foreach ($id as $row) {
                $sql = "delete from tbl_product where id=?";
                $stmt = self::$conn->prepare($sql);
                $stmt->bindValue(1, $row);
                $stmt->execute();


            }
        }

    }

    function omite1($id = [])
    {

        if ($id != []) {
            $id = $id['id'];
            foreach ($id as $row) {
                $sql = "delete from tbl_cash where id=?";
                $stmt = self::$conn->prepare($sql);
                $stmt->bindValue(1, $row);
                $stmt->execute();


            }
        }

    }

    function get_attrinfo($id)
    {
        $sql1 = "select * from tbl_attr where idcat=? and parent!=0 ";

        return $this->select($sql1, [$id]);
    }

    function get_attr_pro($id)
    {
        $proinfo = $this->getproinfo($id);
        $catid = $proinfo['cat'];
        $attr = $this->get_attrinfo($catid);
        $result = ['attr' => $attr, 'proinfo' => $proinfo];

        return $result;
    }

    function get_p($id)
    {

        $sql1 = "select * from tbl_pro_attr where idpro=? ";

        return $this->select($sql1, [$id]);
    }

    function in($adds = [], $id)
    {
        $num = $adds['id1'];

        foreach ($num as $row) {
            $sql2 = "delete from tbl_pro_attr where idpro=? and idattr=? ";
            $valu1 = [$id, $row];
            $this->insert($sql2, $valu1);
            $sql = "insert into tbl_pro_attr (idpro,idattr,value1) VALUES(?,?,?)";
            $valu = [$id, $row, $adds[$row]];
            $this->insert($sql, $valu);
        }

    }

    function get_gallery($idpro)
    {
        $sql1 = "select * from tbl_gallery where idpro=? ";

        return $this->select($sql1, [$idpro]);
    }

    function store($id, $file)
    {
        $target = 'Public/images/products/' . $id . '/gallery/small/' . $file['name'];
        move_uploaded_file($file['tmp_name'], $target);
        $sql = "insert into tbl_gallery (idpro,img) VALUES(?,?)";
        $valu = [$id, $file['name']];
        $this->insert($sql, $valu);

    }

    function dell($id, $proid)
    {
        foreach ($id as $row) {
            $sql1 = "select * from tbl_gallery where id=? ";
            $result = $this->select($sql1, [$row], 1);
            $target = 'Public/images/products/' . $proid . '/gallery/small/'.$result['img'];
            unlink($target);
            $sql = "delete from tbl_gallery where id=?";
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $row);
            $stmt->execute();



        }
    }


}


?>