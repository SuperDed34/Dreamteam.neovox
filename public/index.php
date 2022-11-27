<?php
require_once dirname(__DIR__).'/config/init.php';

if (PHP_MAJOR_VERSION < 8){
    die('Необходиа версия PHP >= 8');
}
new \max\App();
//throw new Exception('Произошло непредвиденное исключение');
//echo \max\App::$app->getProperty('site_name');
//var_dump(\max\App::$app->getProperties());

?>

<form method="post">

    <button id="1" value="Ok">Нажми меня</button>
</form>
