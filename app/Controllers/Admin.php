<?php

namespace App\Controllers;
use App\Models\Navbar;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use IonAuth\Libraries\IonAuth;

class Admin extends BaseController
{
    protected $ionAuth;
    var $navbar;
    public function initController($request, $response, $logger)
    {
        parent::initController($request, $response, $logger);
        $this->navbar = new Navbar();
        $this->ionAuth = new IonAuth();
       
    }
    public function loginPage()
    {
        $input = $this->request->getPost('admin');
        $password = $this->request->getPost('password');

        
        $user = $this->ionAuth->where('username', $input)->users()->row();
        

        if ($user) {
            $identity = $user->username;
            if ($this->ionAuth->login($identity, $password)) {
                $redirectUrl = session()->get('redirect_url') ?? '/';
                return view('LogSuc');
            }
        }

        return redirect()->back()->with('error', $this->ionAuth->errors() ?: 'Invalid login credentials.');
       
    }
}
