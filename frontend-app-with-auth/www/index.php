<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 27.06.18
 * Time: 17:04
 */
namespace App;

use App\Mod\Front\FrontModule;
use App\Mod\Login\LoginModule;
use HtmlTheme\Pack\CoreUI\CoreUiModule;
use Phore\MicroApp\App;
use Phore\MicroApp\Handler\JsonExceptionHandler;

require __DIR__ . "/../vendor/autoload.php";

$app = new App();
$app->activateExceptionErrorHandlers();
$app->setOnExceptionHandler(new JsonExceptionHandler());

$app->addAssetPath(__DIR__ . "/asset/");
$app->addVirtualAsset("all.css", __DIR__ . "/asset/user-defined-styles.css");

$app->addModule(new CoreUiModule());
$app->addModule(new LoginModule());

$app->addModule(new FrontModule());


$app->serve();