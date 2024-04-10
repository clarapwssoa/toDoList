<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Home extends BaseController


{

    public function index()
    {   

        $data['jobs'] = $this->getAllJobs();

        echo view('home', $data);
    }

    //=============================================================================

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }


    //=============================================================================
    // PRIVATE
    //=============================================================================

    private function getAllJobs()
    {

        $userId = ( session('user')->id );
        $db = db_connect();

        $dados = $db->query("SELECT * FROM jobs WHERE user_id = $userId ")->getResultObject();
        
        return ($dados);
    }
}

