<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Author;

class Authors extends Controller{

    public function index() {

        return view('authors/GetAuthors');

    }
}