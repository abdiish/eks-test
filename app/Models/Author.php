<?php 
namespace App\Models;

use CodeIgniter\Model;

class Author extends Model{
    protected $table         = 'autores';
    protected $primaryKey    = 'autor_id';
    protected $allowedFields = ['nombre', 'apellido', 'seudonimo', 'genero', 'fecha_nacimiento', 'pais_origen'];
}