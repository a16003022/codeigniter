<?php
namespace App\Controllers;
use App\Models\Registrar;
use App\Models\Personas;

class Contacto extends BaseController
{
    public function index()
    {
        $data=[
            "titulo"=>"Inicio"
        ];
        $data2=[
            'titulo_seccion'=>"Registro para los usuarios",
            "descripcion"=>"Los siguientes datos son necesarios para la captura o el acceso 
            a nuestra tineda virtual, de lo contrario no podrá realizar niguna compra, ni mucho menos
            recibir promociones u ofertas"
        ];
        $mPersonas=new Personas();
        $data3["persona"]=$mPersonas->traer_personas();
    //la funcion view rsta conformada por 2 parametros: donde se encuentra la vista y el arreglo asociativo
        $vistas= view('contacto/header', $data).  
            view('contacto/menu').
            view('contacto/inicio').
            view('contacto/contenido', $data2).
            view('contacto/listar_personas', $data3).
            view('contacto/footer');
        return $vistas;
    }
    public function catalogo($numeroCatalogo){
        $data=['titulo'=>"catalogo"];
        $catalogo=['numero'=>$numeroCatalogo];
        
        echo view('contacto/header',$data);
        echo view('contacto/menu');
        echo view('contacto/catalogo',$catalogo);
        echo view('contacto/footer');

    }
    public function envio_post(){
        $valor1=$_POST["nombre"];
        $valor2=$_POST["direccion"];
        $valor3=$_POST["correo"];
        echo $valor1."<br>".$valor2."<br>".$valor3;
    }
    public function guardar_persona(){
        $data=[
            "nombre"=>$_POST["nombre"],
            "direccion"=>$_POST["direccion"],
            "correo"=>$_POST["correo"]
        ];
        $mregistrar= new Registrar(); //instanciando mi modelo

        /*if($mregistrar->insert($data)==false){
            //var_dump: proporciona info sobre el tamaño del array o los elementos que los componen
            var_dump($mregistrar->errors());
        }*/
        $mregistrar->guardar_persona($data);
        //en la sig es como retornar a la pagina anterior.
        return redirect()->back();
        //echo json_encode(["mensaje"=>"creado el registro"]);
    }
}
?>