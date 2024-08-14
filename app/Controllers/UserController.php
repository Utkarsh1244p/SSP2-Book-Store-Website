<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class UserController extends BaseController
{
    public function index()
    {
        return view('employee/create.php');
    }

    public function create()
    {

        $users = new EmployeeModel();

        $data=[            
        'first_name'=>$this->request->getPost('fname'),
        'last_name'=>$this->request->getPost('lname'),
        'phone'=>$this->request->getPost('phone'),
        'email'=>$this->request->getPost('email'),
        'address'=>$this->request->getPost('address'),
        'pan_card_code'=>$this->request->getPost('panNumber'),
        'aadhar_card_code'=>$this->request->getPost('aadharNumber'),
        'password'=>'hello'

        ];


        if($users->insert($data)) {
        return redirect()->to('employee')->withInput()->with('errors','HELLL');
        } else {
        return redirect()->back()->withInput()->with('errors', $users->errors());
        }


    
    }
}
