<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('Layout/admin/navbar.php');
    }

}