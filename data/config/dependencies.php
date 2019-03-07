<?php
// DIC configuration
use Casbin\Enforcer;
use Casbin\Util\Log;

$container = $app->getContainer();


// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

//  twig
$container['view'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    $view = new \Slim\Views\Twig($settings['template_path'], [
        'cache' =>$settings['template_cache'],
        'debug'=>false,
        'auto_reload'=>true,
    ]);

    // Instantiate and add Slim specific extension
    $router = $c->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};

//  orm
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($settings['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$container['db'] = function ($c)use($capsule) {
    return $capsule;
};








//错误信息执行回调 404 500等

//sql:关系型orm插件

//radis:非关系型db插件

//cash-bin:权限资源插件

//execl:报表插件

//qiuniu:七牛插件

//sms:短信插件

//live:直播插件

//gd-image:图形插件

//socket:TCP/UPD插件

//cors:跨域插件

//csrf:防止表单攻击插件

//mail:邮件服务插件

//twig:模板插件

//jwt:jwt令牌插件

//qrcode:二维码插件

//payment:支付各种插件

//wechat:微信SDK插件

//session_redis:session会话存储插件


//系统开发规范化

//1.ios
//2.php
//3.android






