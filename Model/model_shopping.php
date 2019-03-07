<?php

class model_shopping extends model
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }

    function getbasket()
    {
        $sql = "select b.num,b.id as basketrow,p.*,c.title as colortitle,g.title as garantytitle from 
tbl_basket b 
JOIN tbl_product p ON b.idpro=p.id
JOIN tbl_color c ON b.color=c.id
JOIN tbl_garanty g on b.garanty=g.id
WHERE cookie=?";


        $cookie = self::getbasketcookie();
        $param = [$cookie];
        $result = $this->select($sql, $param);
        $all = 0;
        foreach ($result as $row) {
            $all += $row['price'] * $row['num'];
        }

        return [$result, $all];


    }

    function delete($proid)
    {

        $sql = "delete from tbl_basket WHERE id=?";
        $param = [$proid];
        return $result = $this->select($sql, $param);
    }

    function update($data)
    {
        $num = $data['num'];
        $row = $data['row'];
        $sql = "update tbl_basket set num=? where id=?";
        $this->insert($sql, [$num, $row]);
    }


}


?>