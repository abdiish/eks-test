<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Author;

class Authors extends Controller{

    public function index() {

        // Instanciar modelo
        $author = new Author();
        $data['autores'] = $author->orderBy('autor_id', 'DESC')->findAll();
        return view( 'authors/GetAuthors', $data );

    }
}