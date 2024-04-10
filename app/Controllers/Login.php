<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('login');
        echo view('common/footer');
    }

    //===========================================================================

    public function do_login()
    {


        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $result = $userModel->where('email', $email)->first();

        if ( $result->id > 0 ){

            if(password_verify($password, $result->password)){

                $this->session->set("user", $result);
                return redirect()->to('/home');
                
            } else {
                echo 'email ou senha inválidos';
            }
        } else {
            echo 'email ou senha inválidos';
        }

    }

    //===========================================================================

    public function logout(){

        session()->destroy();
        return redirect()->to('/register');
    }
}
