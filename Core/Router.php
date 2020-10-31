<?php
namespace app\Core;

use app\Core\Request;
use app\Core\Application;

class Router{
    public $request;
 protected array $routes = [];
 public function __construct(Request $request){
    $this->request = $request; 
 }
 public function get($path, $callback){
     $this->routes['get'][$path] = $callback;
 }
 public function resolve(){
   $path = $this->request->getPath();
   $method = $this->request->getMethod();
   $callback = $this->routes[$method][$path] ?? false;
   if ($callback === false) {
       return 'not found';
    
   }
   if(is_string($callback)){
       return $this->renderView($callback); 
   }
   return call_user_func($callback);
 }
 public function renderView($view){
    $layoutContent = $this->layoutContent();
    $contentView = $this->renderOnlyview($view);
    return \str_replace('{{content}}', $contentView, $layoutContent);
    // include_once Application::$DIR_ROOT."/views/$view.php";
 }
 protected function layoutContent(){
     ob_start();
     include_once Application::$DIR_ROOT."/views/layouts/main.php";
     
     return ob_get_clean();
 }
 protected function renderOnlyview($view){
    include_once Application::$DIR_ROOT."/views/$view.php"; 
 } 
}