<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends BaseController
{
    public function index()
    {
        echo view('common/header');
        return view('register');
        echo view('common/footer');
    }
    
    //=============================================================================

    public function newJob()
    {
        return view('new_job');
    }

    //=============================================================================

    public function newJobSubmition()
    {

        if (!$_SERVER['REQUEST_METHOD'] == 'POST') {
            return redirect()->to(site_url('home'));
        }

        $params = [
            'jobs' => $this->request->getPost('jobs'),
        ];
        
        $userId = ( session('user')->id );
        $db = db_connect();
        $db->query("INSERT INTO jobs(jobs, user_id, status, datetime_created) VALUES(:jobs:, $userId, 'pendente', NOW())", $params);
        $db->close();

        return redirect()->to(site_url('home'));
    }
    
    //=============================================================================

    public function jobDone($id_jobs = -1)
    {
        $params = [
            'id_jobs' => $id_jobs
        ];

         $db = db_connect();
         $data['jobs'] = $db->query("
            SELECT * FROM jobs WHERE id_jobs = :id_jobs:
         ", $params)->getResultObject()[0];
         $db->close();

        return view('finish_job', $data);
    }

    //=============================================================================

    public function finishjobconfirm($id_jobs = -1) 
    {
        $params = [
            'id_jobs' => $id_jobs
        ];
        $db = db_connect();
        $db->query("
            UPDATE jobs
            SET status = 'feito',
            datetime_updated = NOW()
            WHERE id_jobs = :id_jobs:
        ", $params);
        $db->close();

        return redirect()->to(site_url('home'));
    }


    //=============================================================================

    public function editJob($id_jobs = -1)
    {
        $params = [
            'id_jobs' => $id_jobs
        ];
        $db = db_connect();
        $dados = $db->query("
        SELECT * FROM jobs WHERE id_jobs = :id_jobs:
        ", $params)->getResultObject();
        $db->close();

        $data['jobs'] = $dados[0];
        return view('edit_job', $data);
    }

    //=============================================================================

    public function editJobSubmition()
    {
        $params = [
            'id_jobs' => $this->request->getPost('id_jobs'),
            'jobs' => $this->request->getPost('jobs')
        ];

        $db = db_connect();
        $db->query("
            UPDATE jobs
            SET jobs = :jobs:,
            datetime_updated = NOW()
            WHERE id_jobs = :id_jobs:
        ", $params);
        $db->close();

        return redirect()->to(site_url('home'));
    }

    //=============================================================================

    public function deleteJob($id_jobs = -1)
    {
        $params = [
            'id_jobs' => $id_jobs
        ];

         $db = db_connect();
         $data['jobs'] = $db->query("
            SELECT * FROM jobs WHERE id_jobs = :id_jobs:
         ", $params)->getResultObject()[0];
         $db->close();

        return view('delete_job', $data);

    }

    //=============================================================================

    public function deletejobconfirm($id_jobs = -1) 
    {
        $params = [
            'id_jobs' => $id_jobs
        ];

         $db = db_connect();
         $db->query("DELETE FROM jobs WHERE id_jobs = :id_jobs:", $params);
         $db->close();

        return redirect()->to(site_url('home'));
    }
}