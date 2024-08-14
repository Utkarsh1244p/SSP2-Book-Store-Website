<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'users';  // Table name
    protected $primaryKey = 'id';  // Primary key field

    // Set the allowed fields to be inserted or updated
    protected $allowedFields = [];

    // If you have timestamp fields (created_at, updated_at)
    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';

    // Enable soft deletes if you have a `deleted_at` field in the table
    // protected $useSoftDeletes = true;
    // protected $deletedField  = 'deleted_at';

    // Validation rules and messages
    // protected $validationRules    = [
    //     'username' => 'required|alpha_numeric|min_length[3]',
    //     'email'    => 'required|valid_email',
    //     'password' => 'required|min_length[8]',
    // ];

    // protected $validationMessages = [
    //     'username' => [
    //         'required' => 'Username is required.',
    //         'alpha_numeric' => 'Username can only contain alphanumeric characters.',
    //     ],
    //     'email' => [
    //         'required' => 'Email is required.',
    //         'valid_email' => 'Please provide a valid email address.',
    //     ],
    //     'password' => [
    //         'required' => 'Password is required.',
    //         'min_length' => 'Password must be at least 8 characters long.',
    //     ],
    // ];

    // Skip validation on inserts/updates
//    protected $skipValidation = false;




}
