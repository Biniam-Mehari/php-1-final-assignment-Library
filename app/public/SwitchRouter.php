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
                require __DIR__ . '/controller/UserController.php';
                $controller = new UserController();
                $controller->loginView();
                break;
            case 'logout':
                require __DIR__ . '/controller/UserController.php';
                $controller = new UserController();
                $controller->logOutUser();
                break;
            case 'signup':
                require __DIR__ . '/controller/UserController.php';
                $controller = new UserController();
                $controller->signUpView();
                break;
            case 'signup/form':
                require __DIR__ . '/controller/UserController.php';
                $controller = new UserController();
                $controller->setUser();
                break;
            case 'login/form':
                require __DIR__ . '/controller/UserController.php';
                $controller = new UserController();
                $controller->loginUser();
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
                $controller = new MyListController();
                $controller->index();
                break;
            case 'addnewbookview':
                require __DIR__ . '/controller/BookController.php';
                $controller = new BookController();
                $controller->addNewbookview();
                break;
            case 'newbook/form':
                require __DIR__ . '/controller/BookController.php';
                $controller = new BookController();
                $controller->addNewbook();
                break;

            default:
                require __DIR__ . '/controller/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;
        }
    }
}
