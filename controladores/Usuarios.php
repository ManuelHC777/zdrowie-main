<?php
include_once  $_SERVER['DOCUMENT_ROOT'].'/controladores/mysql.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/modelos/Usuario.php';
class Usuarios
{
    public static function Usuarios_lista(){
        $conn=mysql::connect();
        $sql = 'select * from t_usuario';
        $lista =array();
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $usuario=new Usuario;
                $usuario->e_codigouser=$row["e_codigouser"];
                $usuario->v_nombreuser=$row["v_nombreuser"];
                $usuario->v_passuser=$row["v_passuser"];
                $usuario->e_niveluser=$row["e_niveluser"];
                $usuario->e_estadouser=$row["e_estadouser"];
                array_push($lista, $usuario);
            }
        }
        mysql::close($conn);
        return $lista;
    }


    public static function login($usuario,$contra){
        $conn=mysql::connect();
        $sql = "select * from t_usuario where v_nombreuser = '".$usuario."' and v_passuser ='".$contra."' ";
        $existe = false;
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
           $existe=true;

        }
        mysql::close($conn);
        return $existe;
    }


}
/*
como usar el listar
$list=Usuarios::Usuarios_lista();
echo $list[0]->v_nombreuser;
*/
