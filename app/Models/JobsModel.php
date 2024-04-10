<?php namespace App\Models;

use CodeIgniter\Model;

class JobsModel extends Model
{

    protected $table            = 'jobs';
    protected $primayKey        = 'id';

    protected $useAutoIncrement = true;

    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;

   
    protected $allowedFields    = ['jobs', 'user_id', 'datetime_created', 'datetime_created'];

    protected $useTimeStamps    = false;
    protected $createField      = 'datetime_created';
    protected $updateField      = 'datetime_created';
    protected $finishField     = 'datetime_finished';


    protected $validationRoutes   = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

?>