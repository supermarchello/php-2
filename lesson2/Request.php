<?php

trait Singleton
{
    private static $instance;
    
    private function __construct()
    {
        $this->__instance();
    }
    
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }
    
    private function __clone()
    {
    }
    
    private function __wakeup()
    {
    }
}

class Request
{
    use Singleton;
    
    private $request;
    
    public function __instance()
    {
        $this->setRequest($_REQUEST);
    }
    
    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }
    
    /**
     * @param mixed $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }
    
}

$request  = Request::getInstance()->getRequest();
$request2 = Request::getInstance()->getRequest();
var_dump($request);
var_dump($request2);


