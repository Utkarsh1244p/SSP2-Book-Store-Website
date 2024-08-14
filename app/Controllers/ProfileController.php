<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class ProfileController extends BaseController
{
    public function index(): string
    {

        $user = new EmployeeModel();
        $profileData = $user->where('email', session()->get('email'))->first();
        $profile = [
            'profile' => $profileData, // Assuming $profileData holds your user profile information
        ];
        
        return view('admin/userprofile.php', $profile);

    }

    public function create(): string
    {
        $employee = new EmployeeModel();
        $data['employee'] = $employee -> findAll();
        // var_dump($data['employee']);
        return view('employee/index.php', $data);

    }
}
