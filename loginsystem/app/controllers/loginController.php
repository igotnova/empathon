<?php

    class loginController extends Controller
    {
        static function login($username, $password, $return = false)
        {
            global $con;

            $str = "SELECT `id`, `username`, `password` FROM `users`
                    WHERE username = '%s'";

            $result = $con->queryi($str, $username);

            if($result->num_rows > 0)
            {
                $result = $result->fetch_array();

                if (password_verify($password, $result['password']))
                {
                    $_SESSION['username'] = $result['username'];
                    $_SESSION['password'] = $password;

                    if ($return) {
                        return $result['id'];
                    }

                    Controller::redirect('home');
                } else {
                    Controller::message('error', 'Gebruikersnaam en wachtwoord komen niet overeen.');
                    Controller::redirect('back');
                }
            } else {
                Controller::message('error', 'Gebruikersnaam en wachtwoord komen niet overeen.');
                Controller::redirect('back');
            }
        }
    }