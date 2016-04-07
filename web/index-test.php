<?php
defined('DEBUG_HOST') or define('DEBUG_HOST', '127.0.0.1,::1'.','.$_SERVER['REMOTE_ADDR']);//.$_SERVER['REMOTE_ADDR']);

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('You are not allowed to access this file.');
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

require(dirname(dirname(__DIR__)).'/vendor/autoload.php');
require(dirname(dirname(__DIR__)).'/vendor/yiisoft/yii2/Yii.php');
if(file_exists(dirname(dirname(__DIR__)).'/common/config/bootstrap.php'))
{
	require(dirname(dirname(__DIR__)).'/common/config/bootstrap.php');
}
require(dirname(__DIR__).'/config/bootstrap.php');

$config = require(dirname(dirname(__DIR__)).'/tests/codeception/config/apptpl/acceptance.php');

(new yii\web\Application($config))->run();
