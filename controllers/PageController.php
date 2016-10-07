<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');

    if(!empty($_POST['username']) && !empty($_POST['password'])) {

        $username = Input::get('username');
        $password = Input::get('password');

        $message = Auth::attempt($username, $password);

    };

    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {
        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {
        $request = $_SERVER['REQUEST_URI'];
    }

    // switch that will run functions and setup variables dependent on what route was accessed
    
    switch ($request) {
        case '/' :
            $main_view = '../views/home.php';
            break;
        case '/login' :
            $main_view = '../views/users/login.php';
            break;
        case '/signup' :
            $main_view = '../views/users/signup.php';
            break;
        case '/create' :
            if (isset($_SESSION['IS_LOGGED_IN'])) {
                $main_view = '../views/ads/create.php';
            } else {
                header('Location: /login');
                die;
            }
            break;
        case '/edit_ad' :
            if (isset($_SESSION['IS_LOGGED_IN'])) {
                $main_view = '../views/ads/edit.php';
            } else {
                header('Location: /login');
                die;
            }
            break;
        case '/edit_user' :
            if (isset($_SESSION['IS_LOGGED_IN'])) {
                $main_view = '../views/users/edit.php';
            } else {
                header('Location: /login');
                die;
            }
            break;
        case '/show' :
            $main_view = '../views/ads/show.php';
            break;
        case '/logout' :
            Auth::logout();
            $main_view = '../views/home.php';
            break;
        case '/index' :
            $main_view = '../views/ads/index.php';
            break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());
