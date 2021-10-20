<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 09.07.18
 * Time: 10:37
 */

namespace App\Mod\Login;


use Phore\MicroApp\App;
use Phore\MicroApp\AppModule;
use Phore\MicroApp\Auth\BasicUserProvider;
use Phore\MicroApp\Auth\HttpFormAuthMech;

class LoginModule implements AppModule
{

    /**
     * Called just after adding this to a app by calling
     * `$app->addModule(new SomeModule());`
     *
     * Here is the right place to add Routes, etc.
     *
     * @param App $app
     *
     * @return mixed
     */
    public function register(App $app)
    {

        $app->acl->addRule(["route"=>"/login", "action"=>"ALLOW"]);
        $app->router->delegate("/login", LoginCtrl::class);
        $app->router->get("/logout", function () use ($app) {
            $app->authManager->doLogout();
            header("Location: /login");
            exit;
        });

        $app->authManager->setAuthMech(new HttpFormAuthMech());
        $app->authManager->setUserProvider(new BasicUserProvider(["admin:admin:@admin:{}"], true));

        //$app->acl->addRule(["action"=>"ALLOW"]);
    }
}