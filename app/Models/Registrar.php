<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Registrar extends Model
{
    protected $table    = 'personas';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['nombre', 'direccion', 'correo'];



    public function guardar_persona($param){
        $this->insert($param);
        /*$query=$this->db->query("INSERT INTO personas(nombre, direccion, correo)
        values('".$param['nombre']."', '".$param['direccion']."', '".$param['correo']."')");
        return $query->getResult();*/
    }
}
?>