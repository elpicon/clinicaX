<?php

header('Content-Type: application/json');
include('dbcon.php');
 $pdo=new PDO("mysql:dbname=beatiful_drpej;host=localhost","root","");
//$result2 = mysqli_query( $con, "SELECT * FROM cita WHERE id_medico='$id_medico' AND fecha = '$fechasel' AND estado_cita = 'reservado' " )or die( mysqli_error() );
$accion=(isset($_GET['accion']))?$_GET['accion']:'leer';

switch($accion){
        case 'agregar':
               $sentenciaSQL=$pdo->prepare("INSERT INTO eventos(title,descripcion,color,textColor,start,end,habil)
                                                          VALUES(:title,:descripcion,:color,:textColor,:start,:end,:habil)");
                                                          
                $respuesta=$sentenciaSQL->execute(array(
                    
                    /*                        "title"=>'este es el tutulo',
                                            "descripcion"=>'perra descripcion',
                                            "color"=>'#555555',
                                            "textColor"=>'#ffffff',
                                            "start"=>"2021-08-06",
                                            "end"=>"2021-08-06",
                                            "habil"=>'true'*/
                                            "title"=>$_REQUEST['title'],
                                            "descripcion"=>$_REQUEST['descripcion'],
                                            "color"=>$_REQUEST['color'],
                                            "textColor"=>$_REQUEST['textColor'],
                                            "start"=>$_REQUEST['start'],
                                            "end"=>$_REQUEST['end'],
                                            "habil"=>$_REQUEST['habil']
                                            ));
                    echo json_encode($respuesta);
                  // echo "agregar";
            break;
            
        case 'eliminar':
            
            $respuesta=false;
            if(isset($_REQUEST['id'])){
            $sentenciaSQL=$pdo->prepare("DELETE FROM eventos WHERE ID=:ID");
            $respuesta=$sentenciaSQL->execute(array('ID'=>$_REQUEST['id']));
            }
            echo json_encode($respuesta);
            break;
        
        case 'modificar':
            
            $sentenciaSQL=$pdo->prepare("UPDATE eventos SET
            title=:title,
            color=:color,
            textColor=:textColor,
            start=:start,
            end=:end,
            habil=:habil,
            descripcion=:descripcion
            WHERE ID=:ID");
            
           $respuesta=$sentenciaSQL->execute(array(
                                            "ID"=>$_REQUEST['id'],
                                            "title"=>$_REQUEST['title'],
                                            "descripcion"=>$_REQUEST['descripcion'],
                                            "color"=>$_REQUEST['color'],
                                            "textColor"=>$_REQUEST['textColor'],
                                            "start"=>$_REQUEST['start'],
                                            "end"=>$_REQUEST['end'],
                                            "habil"=>$_REQUEST['habil']
                                           // background
                                            ));
                                            
                             echo json_encode($respuesta);
            
            break;
        default:
               
                $sentenciaSQL=$pdo->prepare("SELECT * FROM eventos");
                $sentenciaSQL->execute();
                $result= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($result);
            break;
}







?>