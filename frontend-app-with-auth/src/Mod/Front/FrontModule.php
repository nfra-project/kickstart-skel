<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 09.07.18
 * Time: 10:40
 */

namespace App\Mod\Front;


use Phore\MicroApp\App;
use Phore\MicroApp\AppModule;

class FrontModule implements AppModule
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
        $app->acl->addRule(["route"=>"/*", "role"=>"@admin", "action"=>"ALLOW"]);
        $app->router->delegate("/::path", FrontCtrl::class);
    }
}