<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index() 
    {
        echo view('common/header');
        echo view('register');
        echo view('common/footer');
    }

    //========================================================================

    public function do_register()
    {

        $userModel = new UserModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        

        
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        //dd ($password);

        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password
        ];
        
        $r = $userModel->insert($data);

        if($r){
            return redirect()->to('/login');
        } else{
            echo 'falha ao registrar usuário';
        }

    }
}

