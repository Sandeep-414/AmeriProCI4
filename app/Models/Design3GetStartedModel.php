<?php

namespace App\Models;

use CodeIgniter\Model;

class Design3GetStartedModel extends Model
{
    protected $table = 'design3_get_started';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'email',
        'contact',
        'city_country',
        'project_type',
        'budget',
        'message',
        'phone_preferred'
    ];

    protected $useTimestamps = false;

    protected $returnType = 'array';
}