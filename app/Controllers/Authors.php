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

        $data['header'] = view('shared/Header');
        $data['footer'] = view('shared/Footer');

        return view('authors/CreateAuthor', $data);
    }

    // Método guardar información, nuevo autor   
    public function save() {

        $author = new Author();

        $nombre           = $this->request->getVar('nombre');
        $apellido         = $this->request->getVar('apellido');
        $seudonimo        = $this->request->getVar('seudonimo');
        $genero           = $this->request->getVar('genero');
        $fecha_nacimiento = $this->request->getVar('fecha_nacimiento');
        $pais_origen      = $this->request->getVar('pais_origen');

        // TODOD: Validar datos que vienen del formulario y mostrtar errores segun sea el caso

        $data = [
            'nombre'=>$nombre,
            'apellido'=>$apellido,       
            'seudonimo'=>$seudonimo,
            'genero'=>$genero,
            'fecha_nacimiento'=>$fecha_nacimiento, 
            'pais_origen'=>$pais_origen
        ];

        $author->insert($data);

    }
}