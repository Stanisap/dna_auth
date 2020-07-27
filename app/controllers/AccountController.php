<?php
/**
 *
 */

namespace app\controllers;

use app\core\Controller;
use app\core\Model;

class AccountController extends Controller
{

    function authAction()
    {
        $data = [];
        if (!empty($_POST)) {
            session_start();
            //$count = 0;
            $count = isset($_SESSION['count']) ? $_SESSION['count'] : 0;
            if ( $this->model->authData($_POST) && $count < 3) {
                $count = 0;
                setcookie('auth', true, time() + 3600, '/');
                $this->view->redirect('/');
            } else {
                if($count >= 0) {
                    $data = [
                        'message' => 'не верные данные!'
                    ];
                }
                if ($count >= 3) {
                    if ( !isset($_SESSION['time'] ) ) $_SESSION['time'] = time();
                    $this->timer();
                }

                $count++;
                $_SESSION['count'] = $count;

            }
        } elseif (empty($_POST)) {
            $data = [
                'message' => 'введите Ваше имя и пароль!',
                'class' => 'alert-success',
            ];
        } elseif (!isset($_COOKIE['auth'])) {
            $data = [
                'message' => 'Вы не ввели имя и пароль!'
            ];
        } elseif (isset($_COOKIE['auth'])) {
            $data = [
                'message' => 'Вы вышли зи системы!'
            ];
        }
        $this->view->render('Страница авторизации', $data);
    }

    private function timer() {
        $timer = time() - $_SESSION['time'];

        if ($timer < 300) {
            $_SESSION['seconds'] = 300 - $timer;
        } else {
            session_destroy();
        }
    }

}