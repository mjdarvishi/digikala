<?php
class App
{

    public $controller = 'index';
    public $method = 'index';
    public $prams = [];

    function __construct()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = $this->ex($url);
            $this->controller = $url[0];
            if (isset($url[1])) {
                $this->method = $url[1];
            }
            $this->prams = $this->remove($url);
        }
        $address = 'Controller/'.$this->controller.'.php';
        if (file_exists($address)) {
            require($address);
            $object = new $this->controller;
            $object->model($this->controller);
            call_user_func_array([$object, $this->method], $this->prams);

        }

    }

    function remove($url)
    {
        unset($url[0]);
        unset($url[1]);

        return array_values($url);
    }

    function ex($url)
    {
        filter_var($url, FILTER_SANITIZE_URL);
        $url=rtrim($url,'/');
        $url = explode('/', $url);

        return $url;
    }
}
?>