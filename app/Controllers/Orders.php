<?php


namespace App\Controllers;

use CodeIgniter\Controller;
use IonAuth\Libraries\IonAuth;

class Orders extends Controller
{
    public function index()
    {
        helper('cookie');
        set_cookie([
            'name' => "URL_Cookie",
            'value' => "Orders/hello",
            'expire' => time() + 1000,
            'httponly' => false
        ]);

        return redirect()->to('auth/login')->withCookies();
    }

    public function hello()
    {
        $ionAuth = new IonAuth;
        if ($ionAuth->isAdmin()) {
            echo "ADMIN";
        } else {
            echo "No Admin";
        }
    }

    public function hellohello()
    {
        $ionauth = new IonAuth;

    }

    public function test()
    {
        echo view('test');
    }
}