<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 09.07.18
 * Time: 14:43
 */

namespace App\Mod\Login;


use Phore\MicroApp\Auth\InvalidUserException;
use Phore\MicroApp\Controller\Controller;
use Phore\MicroApp\Type\QueryParams;
use Phore\MicroApp\Type\Request;
use Phore\MicroApp\Type\Route;
use Phore\MicroApp\Type\RouteParams;

class LoginCtrl extends Controller
{


    public function on_get(
        Request $request,
        Route $route,
        RouteParams $routeParams,
        QueryParams $GET)
    {

        $v = new LoginView();
        $v->out();
    }

    public function on_post(Request $request, Route $route, RouteParams $routeParams, QueryParams $GET, QueryParams $POST)
    {
        try {
            app()->authManager->doAuth($_POST["username"], $_POST["password"]);
            header("Location: /");
            exit;
        } catch (InvalidUserException $e) {
            $v = new LoginView();
            $v->setErrorMsg("Unknown userid or invalid password.");
            $v->out();
        }

    }

}