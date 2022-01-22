<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Auth extends BaseController
{

    public function index(){
        $data = array();
        $data['page'] = 'Auth';
        return view('admin/login', $data);
    }
    
}
