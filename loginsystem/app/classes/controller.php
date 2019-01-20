<?php

    if (!$_SESSION['flash']) {
        $_SESSION['flash'] = [
            'error' => ''
        ];
    }

    class Controller
    {
        static function redirect($where)
        {
            switch($where)
            {
                case 'back':
                    header('Location: '.$_SERVER['PHP_SELF']);
                    break;
                case 'home':
                    header('Location: /');
                    break;
            }

            exit;

        }

        static function message($type, $message)
        {
            $_SESSION['flash'][$type] = $message;
        }

        static function hasMessage($type)
        {
            return $_SESSION['flash'][$type];
        }

        static function getMessage($type)
        {
            $msg = $_SESSION['flash'][$type];
            $_SESSION['flash'][$type] = '';

            return $msg;
        }
    }