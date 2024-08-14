<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;
use App\Models\ContactModel;



class EmailController extends BaseController
{
    
    public function __construct(){
        helper(['form', 'url']);
    }

    


    public function sendEmail()
{
$email = \Config\Services::email();
$email->setFrom('varshasahu@gmail.com', 'Your Name');
$email->setTo('varshasahu@gmail.com');
$email->setSubject('Testing CodeIgniter Email');
$email->setMessage('This is a test email sent from CodeIgniter.');

if ($email->send()) {
    echo 'Email sent successfully';
} else {
    echo 'Failed to send email: ' . $email->printDebugger();
}

}

public function send()
{
    $data = [
        'name'    => $this->request->getPost('name'),
        'email'   => $this->request->getPost('email'),
        'subject' => $this->request->getPost('subject'),
        'message' => $this->request->getPost('message'),
    ];

    // Insert data into the database
    $contact = new ContactModel();
    
    $send=$contact->save($data);

    session()->setFlashdata('success', 'Your message has been sent successfully!');
    // Redirect back to the contact page
    return redirect()->to('/contact');



}
}
