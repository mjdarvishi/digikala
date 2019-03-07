<?php

class model_index extends model
{


    function __construct()
    {
        parent::__construct();
    }

    function getslider()
    {

        $sql = "select * from tbl_slider1";
        $str = self::$conn->prepare($sql);
        $str->execute();
        $result = $str->fetchAll();

        return $result;

    }

    function getslider2()
    {
        $sql = "select * from tbl_product WHERE special=1 ";
        $sql2 = "select * from tbl_option WHERE setting='time' ";
        $str = self::$conn->prepare($sql);
        $str->execute();
        $result = $str->fetchAll();
        foreach ($result as $key=>$row) {
            $result[$key]['total']=$this->discount($row[3],$row[4]);

    }
        $str2 = self::$conn->prepare($sql2);
        $str2->execute();
        $result2 = $str2->fetch();
        $first = $result[0];
        return [$result,$this->duration($first['time_special'],$result2[2])];
    }
    function getsliderscorole(){
        $sql = "select * from tbl_product WHERE only_digikala=1";
        $str = self::$conn->prepare($sql);
        $str->execute();
        $result = $str->fetchAll();
        return $result;

    }
    function populer(){

        $sql2 = "select * from tbl_option WHERE setting='limit_slider' ";
        $str2 = self::$conn->prepare($sql2);
        $str2->execute();
        $result2 = $str2->fetch();
        $limite=$result2['value'];
        $sql = "select * from tbl_product order by veiwed desc limit ".$limite." ";
        $str = self::$conn->prepare($sql);
        $str->execute();
        $result = $str->fetchAll();


        return $result;

    }

}
?>