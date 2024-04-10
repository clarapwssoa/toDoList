<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table            = 'user';
    protected $primayKey        = 'id';

    protected $useAutoIncrement = true;

    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;

   
    protected $allowedFields    = ['name', 'email', 'password', 'created_at', 'updated_at'];

    protected $useTimeStamps    = false;
    protected $createField      = 'created_at';
    protected $updateField      = 'updataded_at';
    protected $deletedField     = 'deleted_at';


    protected $validationRoutes   = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

?>