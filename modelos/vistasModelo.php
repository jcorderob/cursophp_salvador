<?php
    class vistasModelo{

    /*-------------- modelo para obtener vistas -------*/    
    protected static function obtener_vistas_modelo($ruta){
        $listaBlanca=[];

        if (in_array($ruta,$listaBlanca)){
            if(is_file("./vistas/contenidos/".$ruta."-view.php")){
                $contenido= "./vistas/contenidos/".$ruta."-view.php";
            }  
            else{
                $contenido="404";
            }
        }elseif($ruta=="login" || $ruta=="index"){
            $contenido="login";
        } 
        else{
            $contenido="404";
        }
        return $contenido;
    }
}