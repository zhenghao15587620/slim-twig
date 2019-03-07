<?php
namespace App\lib;

use Psr\Container\ContainerInterface;
use Slim\Container;

class Controller
{
    public $container;
    public $data=[];

    //
    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }
    //
    public function __get($name)
    {
       return $this->container->get($name);
    }

    public function assign($key,$value){
        $this->data[$key]=$value;
    }

    public function display($response,$path){

        return $this->container->get('view')->render($response, $path, $this->data);
    }

    public function success(){

    }

    public function error(){

    }




}