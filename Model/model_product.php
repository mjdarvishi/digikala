<?php

class model_product extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function product_info($id)
    {

        $sql = "select * from tbl_product WHERE id=1 ";
        $sql2 = "select * from tbl_option WHERE setting='time' ";
        $stmt = self::$conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = [$stmt->fetch()];
        $result[1] = $this->discount($result[0]['price'], $result[0]['discount']);
        $str2 = self::$conn->prepare($sql2);
        $str2->execute();
        $res = $str2->fetch();
        $result[2] = $this->duration($res['value'], $result[0]['time_special']);
        $colors = explode(',', $result[0]['colors']);
        $colors = array_filter($colors);
        $result1 = [];
        foreach ($colors as $color) {
            $color_info = $this->get_color($color);
            array_push($result1, $color_info);
        }
        $result[3] = $result1;
        $garanty = explode(',', $result[0]['garanty']);
        $garanty = array_filter($garanty);
        $result2 = [];
        foreach ($garanty as $gar) {
            $Garanty_info = $this->get_garanty($gar);
            array_push($result2, $Garanty_info);
        }
        $result[4] = $result2;

        return $result;


    }

    function get_color($id)
    {
        $sql = "select * from tbl_color WHERE id=? ";

        return $result = $this->select($sql, [$id], 1);
    }

    function get_garanty($id)
    {
        $sql = "select * from tbl_garanty WHERE id=? ";

        return $result = $this->select($sql, [$id], 1);
    }

    function getsliderscorole()
    {
        $sql = "select * from tbl_product WHERE only_digikala=1";
        $str = self::$conn->prepare($sql);
        $str->execute();
        $result = $str->fetchAll();

        return $result;
    }

    function cash($id)
    {
        $sql = "select * from tbl_cash WHERE idp=?";

        return $result = $this->select($sql, [$id]);

    }

    function fani($idcategory, $idpro)
    {
        $sql = "select * from tbl_attr WHERE 	idcat=? and parent=0";
        $result = $this->select($sql, [$idcategory]);


        foreach ($result as $key => $row) {
            $sql = "select tbl_attr.title,tbl_pro_attr.value from tbl_attr LEFT JOIN tbl_pro_attr ON tbl_attr.id=tbl_pro_attr.idattr and tbl_pro_attr.idpro=? WHERE tbl_attr.parent=? ";
            $result2 = $this->select($sql, [$idpro, $row['id']]);
            $result[$key]['child'] = $result2;

        }

        return $result;
    }

    function comment($idcat, $idpro)
    {
        $sql = "select * from tbl_comment WHERE idcat=?";
        $sql2 = "select tbl_sugestion.param from tbl_sugestion where idpro=?";
        $sum = [];
        $res = $this->select($sql2, [$idpro]);
        foreach ($res as $row) {
            $params = unserialize($row['param']);
            foreach ($params as $key => $item) {
                if (!isset($sum[$key])) {
                    $sum[$key] = 0;
                }
                $sum[$key] += $item;
            }
        }

        foreach ($sum as $key => $row) {
            $sum[$key] = $row / sizeof($res);
        }
        $result = [$this->select($sql, [$idcat]), $sum];

        return $result;
    }

    function sugestion($idpr)
    {
        $sql = "select * from tbl_sugestion WHERE idpro=?";

        return $result = $this->select($sql, [$idpr]);
    }

    function getquestion($idpro)
    {
        $sql = "select * from tbl_question WHERE idpro=?";

        return $result = $this->select($sql, [$idpro]);

    }
    function get_gallery($id){
        $sql = "select * from tbl_gallery WHERE idpro=?";

        return $result = $this->select($sql, [$id]);
    }
    function addtobasket($id){
        $cook=self::getbasketcookie();
        $sql1 = "select * from tbl_basket WHERE idpro=? and cookie=? ";
        $result=$this->select($sql1,[$id,$cook]);
        if (isset($result[0])){
            $sql2 = "update tbl_basket set num=num+1 WHERE idpro=? and cookie=? ";
            $this->insert($sql2,[$id,$cook]);
        }else{
        $sql='insert into tbl_basket (cookie,idpro,num) VALUES(?,?,?) ';

        $this->insert($sql,[$cook,$id,1]);
        }
    }
}

?>