<?php
// app/Controllers/DatabaseTest.php

namespace App\Controllers;

use CodeIgniter\Controller;
use mysqli;


class DatabaseTest extends Controller
{
    public function index()
    {
        $mysqli = new mysqli('localhost', 'root', '', 'book_store');

        // Check connection
        if ($mysqli->connect_error) {
            // Connection failed
            return "Connection failed: " . $mysqli->connect_error;
        } else {
            // Connection successful
            return "Database connection successful!";
        }
    }
}

?>
