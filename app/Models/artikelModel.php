<?php

namespace App\Models;

use CodeIgniter\Model;

class artikelModel extends Model
{
    protected $table      = 'artikel';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'content'];
}