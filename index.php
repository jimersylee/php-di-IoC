<?php
/**
 * Created by PhpStorm.
 * User: Jimersy Lee
 * Date: 2017/5/27
 * Time: 14:24
 */

use Framework\Di\FactoryDefault\FactoryDefault;


include "./vendor/autoload.php";
$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();







//define("DS",DIRECTORY_SEPARATOR);//分隔符 window与linux不同
define("DS",DIRECTORY_SEPARATOR);//分隔符 window与linux不同

define('ROOT', __DIR__.DS);

//echo BASE_PATH;

define('APP_PATH', ROOT . 'App'.DS);
echo APP_PATH;


include ROOT . "/Andromeda/DiInterface.php";
include ROOT . "/Andromeda/Di.php";
include ROOT . "/Andromeda/Di/FactoryDefault.php";
include ROOT . "/Andromeda/Di/InjectionAwareInterface.php";
include ROOT . "/Andromeda/Di/Injectable.php";

include ROOT . "/Andromeda/App.php";
include ROOT . "/Andromeda/Andromeda.php";


//容器
$di = new FactoryDefault();




require_once "Andromeda/Andromeda.php";
include ROOT ."/Andromeda/Mvc/Controller.php";


//载入路由配置 handle routes

include APP_PATH . "Config/router.php";

//载入服务配置 read service
include APP_PATH . "Config/service.php";

//载入自动加载配置
include APP_PATH . "Config/loader.php";

//应用(组件)
$app = new \Framework\App($di);

Andromeda::run($di);


















