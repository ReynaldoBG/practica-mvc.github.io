<?php
require 'modelo.php';

$obj = new Calificar();
$tabla = '';

    //Inserta
    if (isset($_POST['btnAgregar'])) {
        $obj->InsertarAlumno($_POST['nombre_alumnoID'],$_POST['materiaID'],$_POST['parcialID'],$_POST['calificacionID'],$_POST['fechaID']);
    } 
    //Busca
    if ($_POST['btnBuscar']) {
        $tabla = $obj->Buscar($_POST['buscaAlumno']);
        
    }else{
        $nombreAlumno = $_POST['nombre_alumnoID']; 
        $tabla = $obj->Buscar($nombreAlumno);
    }
    //Modifica
    if($_POST['btnModificar']){
        $obj->ModificarAlumno($_POST['modID'],$_POST['modCalificacionID']);

    }
    //Elimina xd
    if (isset($_POST['btnEliminar'])) {
        $obj->BorrarCalifiacion($_POST['modID']);
    }

require 'index.php';

?>
