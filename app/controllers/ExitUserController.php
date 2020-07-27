<?php


namespace app\controllers;


use app\core\Controller;

class ExitUserController extends Controller
{
    public function exitUserAction()
    {
        echo 'exit';
        $_SESSION['error'] = 0;
        setcookie('auth', 0, time() + 3600, '/');
        setcookie('PHPSESSID','');
        $this->view->redirect('/auth');
    }
}