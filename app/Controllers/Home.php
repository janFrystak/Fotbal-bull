<?php

namespace App\Controllers;
use App\Models\Navbar;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    var $navbar;
    public function initController($request, $response, $logger)
    {
        parent::initController($request, $response, $logger);
        $this->navbar = new Navbar();
       
    }
    
    public function loadHomepage()
    {
        $data['navbar'] = $this->navbar->findAll();
        return view('Homepage.php', $data);
    }
}
