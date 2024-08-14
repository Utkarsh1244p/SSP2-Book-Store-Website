<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('admin/login.php');
    }
    public function signup()
    {
        return view('admin/signup.php');
    }
    public function signin()
    {

        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $users = new EmployeeModel();
        $check=$users->userExists($username,$password);
        
        if($check==True)
        {
        $user = $users->where('email', $username)->where('password', $password)->first();
         
        $name=$user['first_name']." ".$user['last_name'];   
        $session = session();
        $session->set('username', $name);
        $session->set('email', $user['email']);
        
        return redirect()->to('employee')->withInput()->with('errors','HELLL');
        }else {
            return redirect()->back()->withInput()->with('errors', $users->errors());
            }
    
       
    }

    public function logout()
    {
        // Start the session
        $session = session();

        // Destroy the session data
        $session->destroy();

        // Optionally, you can redirect the user to the login page or home page
        return redirect()->to('/login');
    }
   
}