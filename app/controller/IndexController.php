<?php
/**
 * Created by PhpStorm.
 * User: luyan
 * Date: 2019/3/5
 * Time: 11:21
 */
namespace App\controller;

use App\lib\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class IndexController extends Controller
{

    public function index(Request $request,Response $response,$args){
        $agree=$this->container->get("db");
        $res=$agree::table("agreement")->get();
        $this->assign('agreement',$res);
        $this->display($response,"admin/index/index.twig");

    }

    public function edit(Request $request,Response $response,$args){
        $agree=$this->container->get("db");
        $id=$_GET['id'];
        $res=$agree::table("agreement")->get($id);
        

    }





}