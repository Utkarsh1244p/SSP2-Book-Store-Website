<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact'; // Your database table name
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'subject', 'message']; // Fields to insert/update
}
