<?php

    class authController extends Controller
    {

        static public function check()
        {
            if (isset($_SESSION['username'], $_SESSION['password']))
            {
                $id = loginController::login($_SESSION['username'], $_SESSION['password'], true);

                if ($id > 0)
                {
                    return User::find($id);
                } else {
                    return ['id'=>0];
                }
            }
        }

        static public function protect()
        {

            if (isset($_SESSION['username'], $_SESSION['password']))
            {
                $id = loginController::login($_SESSION['username'], $_SESSION['password'], true);

                if ($id < 0)
                {
                    Controller::message('error', 'Please login.');
                    Controller::redirect('back');
                }
            }

        }
    }