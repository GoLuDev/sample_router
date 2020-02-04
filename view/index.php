<?php

require_once __DIR__ . '/../vendor/autoload.php';


if (isset($_GET['main']))
{

    (new \Sample\App\Controller\MainController())->execute();
}
else
{
    (new \Sample\App\Controller\HomeController())->execute();
}