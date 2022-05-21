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

        $validate = $this->validate([
            'nombre'=>'required|min_length[3]',
            'apellido'=>'required|min_length[3]',
            'seudonimo'=>'required|min_length[3]',
            'genero'=>'required|min_length[1]',
            'fecha_nacimiento'=>'required|min_length[1]',
            'pais_origen'=>'required|min_length[1]',
        ]);

        if (!$validate) {
            # code...
            $session = session();
            $session->setFlashdata('mensaje', 'Todos los campos del formulario son obligatorios');
            
            return redirect()->back()->withInput();
        }

        $nombre           = $this->request->getVar('nombre');
        $apellido         = $this->request->getVar('apellido');
        $seudonimo        = $this->request->getVar('seudonimo');
        $genero           = $this->request->getVar('genero');
        $fecha_nacimiento = $this->request->getVar('fecha_nacimiento');
        $pais_origen      = $this->request->getVar('pais_origen');

        $data = [
            'nombre'=>$nombre,
            'apellido'=>$apellido,       
            'seudonimo'=>$seudonimo,
            'genero'=>$genero,
            'fecha_nacimiento'=>$fecha_nacimiento, 
            'pais_origen'=>$pais_origen
        ];

        $author->insert($data);

        return $this->response->redirect(site_url('/GetAuthors'));

    }

    // Método elimimar registro
    public function delete($author_id = null) {

        $author = new Author();

        $data = $author->where('autor_id', $author_id)->first();

        $author->where('autor_id', $author_id)->delete($author_id);

        return $this->response->redirect(site_url('/GetAuthors'));

    }

    // Método editar registro
    public function update($author_id = null) {

        $author = new Author();

        $data['autor']  = $author->where('autor_id', $author_id)->first();
        $data['header'] = view('shared/Header');
        $data['footer'] = view('shared/Footer');

        return view('authors/UpdateAuthor', $data);
    }

    public function updateAuthor() {

        $author = new Author();

        $nombre           = $this->request->getVar('nombre');
        $apellido         = $this->request->getVar('apellido');
        $seudonimo        = $this->request->getVar('seudonimo');
        $genero           = $this->request->getVar('genero');
        $fecha_nacimiento = $this->request->getVar('fecha_nacimiento');
        $pais_origen      = $this->request->getVar('pais_origen');

        $data = [
            'nombre'=>$nombre,
            'apellido'=>$apellido,       
            'seudonimo'=>$seudonimo,
            'genero'=>$genero,
            'fecha_nacimiento'=>$fecha_nacimiento, 
            'pais_origen'=>$pais_origen
        ];

        $author_id = $this->request->getVar('autor_id');

        $validate = $this->validate([
            'nombre'=>'required|min_length[3]',
            'apellido'=>'required|min_length[3]',
            'seudonimo'=>'required|min_length[3]',
            'genero'=>'required|min_length[1]',
            'fecha_nacimiento'=>'required|min_length[1]',
            'pais_origen'=>'required|min_length[1]',
        ]);

        if (!$validate) {
            # code...
            $session = session();
            $session->setFlashdata('mensaje', 'Todos los campos del formulario son obligatorios');
            
            return redirect()->back()->withInput();
        }

        $author->update($author_id, $data);

        return $this->response->redirect(site_url('/GetAuthors'));
    }
}

