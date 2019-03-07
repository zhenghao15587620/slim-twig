<?php
/**
 * Created by PhpStorm.
 * User: luyan
 * Date: 2019/3/6
 * Time: 11:44
 */

namespace App\controller;


use App\lib\Controller;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class TestController extends Controller
{
    protected $container;
    public function __construct(ContainerInterface $container)
    {
        $this->container=$container;
    }
    //user
    public function user(Request $request,Response $response,$args){
        $users = $this->container->get("db");
        $res = $users::table('users')->where('id', '=', 100)->get();

    }


}