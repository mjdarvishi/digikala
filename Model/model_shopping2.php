<?php

class model_shopping2 extends model
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }

    function add_address($data)
    {
        $family = $data['name'];
        $phone = $data['phone'];
        $tell = $data['tell'];
        $state = $data['state'];
        $city = $data['city'];
        self::session_int();
        $user_id = self::session_get('userid');
        $address = $data['address'];
        $code = $data['code'];

        $sql = "insert into tbl_address (user_id,name,mobile,tell,ostan,city,mahale,address,code) VALUES (?,?,?,?,?,?,?,?,?)";
        $params = [$user_id,$family, $phone, $tell, $state, $city, '', $address, $code];
        $this->insert($sql, $params);


    }


}


?>