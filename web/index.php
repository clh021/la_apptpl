<?php
// defined('DEBUG_HOST') or define('DEBUG_HOST', '127.0.0.1,::1'.','.$_SERVER['REMOTE_ADDR']);//.$_SERVER['REMOTE_ADDR']);
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(dirname(dirname(__DIR__)).'/vendor/autoload.php');
require(dirname(dirname(__DIR__)).'/vendor/yiisoft/yii2/Yii.php');
require(dirname(dirname(__DIR__)).'/common/config/bootstrap.php');
require(dirname(__DIR__).'/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(dirname(dirname(__DIR__)).'/common/config/main.php'),
    require(dirname(dirname(__DIR__)).'/common/config/main-local.php'),
    require(dirname(__DIR__).'/config/main.php'),
    require(dirname(__DIR__).'/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
