<?php
error_reporting(1);
require '../BD/ConexionABD.php';

class Calificar
{

    public function InsertarAlumno($nombreAlumno, $materia, $parcial, $calificacion, $fecha)
    {
        $obj = new BD_PDO();

        $nA = $nombreAlumno;
        $m = $materia;
        $p = $parcial;
        $c = $calificacion;
        $f = $fecha;

        $obj->Ejecutar_Instruccion("INSERT INTO califica (Nombre_Alumno, Materia, Parcial, Calificacion, Fecha) VALUES ('{$nombreAlumno}', '{$materia}', '{$parcial}', '{$calificacion}', '{$fecha}')");
    }



    public function Buscar($nombreAlumno)
    {
        $obj = new BD_PDO();

        if ($nombreAlumno != '') {

            $result = $obj->Ejecutar_Instruccion("SELECT * FROM califica WHERE Nombre_Alumno LIKE '%$nombreAlumno%'");
        } else {
            $result = $obj->Ejecutar_Instruccion("SELECT * FROM califica");
        }

        $tabla = "";

        foreach ($result as $renglon) {
            $tabla .= '<tr>';
            $tabla .= '<td>' . $renglon[0] . '</td>';
            $tabla .= '<td>' . $renglon[1] . '</td>';
            $tabla .= '<td>' . $renglon[2] . '</td>';
            $tabla .= '<td>' . $renglon[3] . '</td>';
            $tabla .= '<td>' . $renglon[4] . '</td>';
            $tabla .= '<td>' . $renglon[5] . '</td>';
            $tabla .= '</tr>';
        }

        return $tabla;
    }

    public function ModificarAlumno($matricula,$calificacion)
    {
        $obj = new BD_PDO();
        $m = $matricula;
        $c = $calificacion;
        

        $obj->Ejecutar_Instruccion("UPDATE califica SET Calificacion = '{$calificacion}', Fecha = CURDATE() WHERE ID_Calif = '{$matricula}'");

        require 'index.php';

    }

    public function BorrarCalifiacion($matricula)
    {
        $obj = new BD_PDO();
        $m = $matricula;

        $obj->Ejecutar_Instruccion("UPDATE califica SET Calificacion = NULL, Fecha = CURDATE()   WHERE ID_Calif = '{$matricula}'");

        require 'index.php';

    }

}

?>