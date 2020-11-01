<?php
namespace app\Core;

use app\Core\Request;
use app\Core\Response;

class Application{
    public Router $router;
    public Request $request;
    public static string $DIR_ROOT;
    public Response $response;
    public static Application $app;
    public function __construct($rootPath){
      self::$DIR_ROOT = $rootPath;
      self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();  
        $this->router = new Router($this->request, $this->response);
      
        }
    public function run(){
      echo $this->router->resolve();
    }
 }