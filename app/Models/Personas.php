<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Personas extends Model
{
    protected $table  = 'personas';
    protected $primaryKey  = 'id';
    protected $returnType  = 'array';
    protected $allowedFields  = ['nombre', 'direccion', 'corre', 'id'];

    public function traer_personas(){
        $query=$this->db->query("select nombre, direccion, correo, id from personas");
        return $query->getResultArray();
    }
}
?>