<?php

namespace app\core;

use app\core\Application;

class controller
{
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function setLayout()
    {

    }
}