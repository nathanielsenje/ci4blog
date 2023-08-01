<?php
// File: app/Models/BlogModel.php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}


