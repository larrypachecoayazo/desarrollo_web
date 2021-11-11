<?php

// class UsuariosController extends ControladorBase{
class UsuariosController {
     
    public function __construct() {
        // parent::__construct();
    }
     
    // Acciones
    public function listar(){
         
        //Creamos el objeto usuario
        // $usuario=new Usuario();
         
        //Conseguimos todos los usuarios
        // $allusers=$usuario->getAll();
        
        // //Cargamos la vista index y le pasamos valores
        // $this->view("index",array(
        //     "allusers"=>$allusers,
        //     "Hola"    =>"Soy Víctor Robles"
        // ));

        // Llamar al modelo
        // Ejecutar una consulta SQL
        // Obtener los resultados

        $data = [
            'nombre'    => 'DESARROLLO WEB',
            'semestre'  => 'NOVENO'
        ];        

        // require_once '../view/'.$vista.'View.php';
        require_once 'view/listarView.php.html';
    }
    
}