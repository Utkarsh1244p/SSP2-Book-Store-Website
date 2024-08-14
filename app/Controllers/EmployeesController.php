<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class EmployeesController extends BaseController
{
    public function index(): string
    {
        if (session()->has("username")) {
        $employee = new EmployeeModel();
        $data['employee'] = $employee -> findAll();
        // var_dump($data['employee']);
        return view('admin/index.php', $data);
        } else {
            return view('admin/login.php');


        }

    }

    public function create(): string
    {
        $employee = new EmployeeModel();
        $data['employee'] = $employee -> findAll();
        // var_dump($data['employee']);
        return view('employee/index.php', $data);

    }
}
