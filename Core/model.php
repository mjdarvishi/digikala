<?php

class model
{
    public static $conn = ' ';

    function __construct()
    {
        $servvername = 'localhost';
        $username = 'root';
        $pass = '';
        $dbname = 'digi_mvc';
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        self::$conn = new PDO('mysql:host=' . $servvername . ';dbname=' . $dbname, $username, $pass, $attr);
    }

    public static function getoption()
    {

        $sql = "select * from tbl_option";
        $str = self::$conn->prepare($sql);
        $str->execute();
        $result = $str->fetchAll();
        $result3 = [];
        foreach ($result as $result4) {
            $result3[$result4['setting']] = $result4['value'];

        }

        return $result3;

    }

    function discount($price, $persent)
    {
        return $price - ($price * $persent / 100);
    }

    function duration($start, $period)
    {
        date_default_timezone_set('Asia/Tehran');

        return $date = date('F d,Y H:i:s', $start + $period);
    }

    function select($sql, $params = [], $fetch = '', $fetchstyle = PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($params as $key => $value) {

            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
        if ($fetch == '') {
            return $stmt->fetchAll($fetchstyle);
        }
        return $stmt->fetch($fetchstyle);


    }

    function insert($sql, $params = [])
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($params as $key => $value) {

            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();


    }

    public static function session_int()
    {
        @session_start();
    }

    public static function session_set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function session_get($name)
    {
        if (isset($_SESSION[$name]))
            return $_SESSION[$name];
        else
            return false;
    }

    public static function getbasketcookie()
    {
        if (isset($_COOKIE['basket']))
            return $_COOKIE['basket'];
        else {
            $value = time();
            setcookie('basket', $value, time() + 7 * 24 * 3600, '/');
            return $value;

        }

    }
}


?>