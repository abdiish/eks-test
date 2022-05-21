<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Author;

class Authors extends Controller{

    // Método obtener autores
    public function index() {

        // Instanciar modelo
        $author = new Author();
        $data['autores'] = $author->orderBy('autor_id', 'ASC')->findAll();
        $data['header']  = view('shared/Header');
        $data['footer']  = view('shared/Footer');

        return view( 'authors/GetAuthors', $data );

    }

    // Método crear nuevo autor
    public function create() {

        return view('authors/CreateAuthor');
    }

}