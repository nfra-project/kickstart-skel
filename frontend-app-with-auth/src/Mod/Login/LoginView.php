<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 09.07.18
 * Time: 14:46
 */

namespace App\Mod\Login;


use HtmlTheme\Pack\CoreUI\CoreUi_Config_LoginPage;
use HtmlTheme\Pack\CoreUI\CoreUi_LoginPage;
use Phore\MicroApp\View\View;

class LoginView implements View
{

    /**
     * @var CoreUi_Config_LoginPage
     */
    public $themeConfig;

    public function __construct()
    {
        $c = $this->themeConfig = new CoreUi_Config_LoginPage();
        $c->title = "Sign In";
        $c->errorMsgHtml = null;
    }


    public function setErrorMsg($msg)
    {
        $this->themeConfig->errorMsgHtml = [$msg];
    }


    public function out()
    {
        app()->out((new CoreUi_LoginPage($this->themeConfig))->render());
    }
}