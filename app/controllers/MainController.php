<?php
/**
 *
 */
namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    function indexAction()
    {

        $data = $this->model->getData();
        if (!isset($_COOKIE['auth']) || $_COOKIE['auth'] == 0) {
            $this->view->redirect('/auth');
        } else {
            $this->view->render('Главная страница', $data);
        }
    }
}