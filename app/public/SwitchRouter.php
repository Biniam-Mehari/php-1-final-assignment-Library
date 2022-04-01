<?php

class SwitchRouter
{
    public function route($uri)
    {
        switch ($uri) {
            case '':
                require __DIR__ . '/controller/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;
            case 'home':
                require __DIR__ . '/controller/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;
            case 'login':
                require __DIR__ . '/controller/LoginController.php';
                $controller = new Logincontroller();
                $controller->index();
                break;
            case 'signup':
                require __DIR__ . '/controller/SignUpController.php';
                $controller = new SignUpController();
                $controller->index();
                break;  
            case 'signup/form':
                    require __DIR__ . '/controller/SignUpController.php';
                    $controller = new SignUpController();
                    $controller->signup();
                    break;  
            case 'homecontroller/index':
                require __DIR__ . '/controller/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;  
            case 'BookView':
                require __DIR__ . '/controller/BookController.php';
                $controller = new BookController();
                $controller->index();
                break; 
            case 'mylist':
                require __DIR__ . '/controller/MyListController.php';
                $controller = new BookController();
                $controller->index();
                break;          
               
            default:
            require __DIR__ . '/controller/HomeController.php';
            $controller = new HomeController();
            $controller->index();
            break;
        }
    }
}
