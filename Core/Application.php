<?php
namespace app\Core;
class Application{
    public Router $router;
    public Request $request;
    public static string $DIR_ROOT;
    public function __construct($rootPath){
      self::$DIR_ROOT = $rootPath;
        $this->request = new Request(); 
       $this->router = new Router($this->request);
      
      
    }
    public function run(){
      echo $this->router->resolve();
    }
 }