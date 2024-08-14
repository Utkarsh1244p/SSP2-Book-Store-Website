<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'aadhar_card_code',
        'pan_card_code',
        'address'
    ];
    public function userExists($email,$password)
    {
        return $this->where('email', $email)->where('password', $password)->first();
    }
}

?>
