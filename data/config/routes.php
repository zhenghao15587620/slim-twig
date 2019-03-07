<?php


use App\controller\IndexController;
use Slim\Http\Request;
use Slim\Http\Response;
use Respect\Validation\Validator as v;
use Koriym\Printo\Printo;
// Routes


$validators = array(
    'name' => v::alnum()->noWhitespace()->length(3, 10)
);
$app->any('/', function (Request $request, Response $response, array $args)use($app) {

    if ($request->isPost()){


        return $response->write((new Printo($request))
            ->setRange(Printo::RANGE_PROPERTY)
            ->setLinkDistance(130)
            ->setCharge(-500)) ;
    }
    return $this->view->render($response, 'index.twig', [
        'data' => 'zhihu',
    ]);
})->add(new \DavidePastore\Slim\Validation\Validation($validators));

//首页测试-----------------------------------------------------------------------------------------------------------------------
$app->any('/test', function (Request $request, Response $response, array $args)use($app) {
    return $this->view->render($response, 'test.twig');
});
//shouy
$app->group('/index', function () {

    $this->any('/index',IndexController::class .':index', function ($request, $response, $args) {

   });
});
