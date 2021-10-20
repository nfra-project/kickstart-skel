<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 09.07.18
 * Time: 10:46
 */

namespace App\Mod\Front;

use HtmlTheme\Pack\CoreUI\CoreUi_Config_PageWithSidebar;
use HtmlTheme\Pack\CoreUI\CoreUi_PageWithSidebar;
use Phore\MicroApp\App;
use Phore\MicroApp\View\View;

class FrontView implements View
{
    /**
     * @var CoreUi_Config_PageWithSidebar
     */
    private $themeConfig;

    public function __construct()
    {
        $this->themeConfig = $c = new CoreUi_Config_PageWithSidebar();
        $c->brandName = " Brand";
        $c->brandLogoUrl = "/asset/brand-logo.png";

        $c->header_badgebar = [
            [
                "icon" => "fas fa-user",
                "href" => "#",
                "children" => [
                    [
                        "icon" => "fas fa-sign-out-alt",
                        "name" => "Logout",
                        "href" => "/logout"
                    ]
                ]
            ]
        ];

        $c->footer = [
            "div" => [
                "a @href=http://crazy-domain.over.the.rainbow" => "Some Project",
                "span" => "Copyright"
            ],
            "div @class=ml-auto" => [
                "span" => "Powered by",
                "a @href=#" => "SomeCompany"
            ]
        ];

    }


    public function out()
    {
        app()->out((new CoreUi_PageWithSidebar($this->themeConfig))->render());
    }


}