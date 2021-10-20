<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 09.07.18
 * Time: 10:41
 */

namespace App\Mod\Front;


use Phore\MicroApp\Controller\Controller;
use Phore\MicroApp\Type\QueryParams;
use Phore\MicroApp\Type\Request;
use Phore\MicroApp\Type\Route;
use Phore\MicroApp\Type\RouteParams;

class FrontCtrl extends Controller
{




    public function on_get(
        Request $request,
        Route $route,
        RouteParams $routeParams,
        QueryParams $GET
    ) {
        $v = new FrontView();
        $v->out();
    }
}