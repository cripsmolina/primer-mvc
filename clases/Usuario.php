<?php
/**
 * Created by PhpStorm.
 * User: Universidad
 * Date: 17/10/14
 * Time: 06:14 PM
 */

class Usuario {

    private $name;

    public function getUsuario(){
        echo"<br>Mostrar Usuario: ".$this->name;
    }

    public function setUsuario(){
        $this->name = "Carlos ";
        return $this->name;
    }

    public function readUserG(){
        //echo "<br><br><br>Leer General<br>";
        $sql02 = "select * from usuario  where estatus=1 ORDER BY apellido_pat ASC";
        $consulta02 = mysql_query($sql02) or die (mysql_error());
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped table-bordered\">";
        echo "<tr><td colspan='5' align=center><strongs>Lista de usuarios</strongs></td></tr>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Nivel</th></tr>";
        while($field = mysql_fetch_array($consulta02)){
            $this->id = $field["id"];
            $this->nombre = utf8_decode($field['nombre']);
            $this->apellidoPaterno = utf8_decode($field['apellido_pat']);
            $this->apellidoMaterno = utf8_decode($field['apellido_mat']);
            $this->nivel = $field["nivel"];
            switch($this->nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
            }

            echo"<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellidoPaterno</td><td>$this->apellidoMaterno</td><td>$type</td></tr>";

        }
        echo "</table>";
        echo "</div>";
    }

} 