<?php
/* Me falta la librería php-gd para ejecutar esta función

function miniatura($archivo, $local, $ancho, $alto){
    $arrNombre = explode(".", $local);
$nombre = $arrNombre[0];
$extension = $arrNombre[1];

if($extension=="jpg" || $extension=="jpeg") $nuevo = imagecreatefromjpeg($archivo);
if($extension=="png") $nuevo = imagecreatefrompng($archivo);
if($extension=="gif") $nuevo = imagecreatefromgif($archivo);

$thumb = imagecreatetruecolor($ancho, $alto);

$ancho_original = imagesx($nuevo);
$alto_original = imagesy($nuevo);

imagecopyresampled($thumb,$nuevo,0,0,0,0,$ancho,$alto,$ancho_original,$alto_original);

$thumb_name = "thumb_$nombre.$extension";

// 90 es la calidad de compresión, Máx 100
if($extension=="jpg" || $extension=="jpeg") imagejpeg($thumb, $thumb_name,90);
if($extension=="png") imagepng($thumb, $thumb_name);
if($extension=="gif") imagegif($thumb, $thumb_name);
}*/

   if(isset($_FILES['inputImage'])){
      $errors= array();
      $file_name = $_FILES['inputImage']['name'];
      $file_size = $_FILES['inputImage']['size'];
      $file_tmp = $_FILES['inputImage']['tmp_name'];
      $file_type = $_FILES['inputImage']['type'];
      $file_ext=strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
      $extensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$extensions)=== false){
        header("Location: 005subidaImagen.html");
      }
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"img/".$file_name);
         //miniatura("img/".$file_name, "img/copy".$file_name, $_POST["ancho"], $_POST["alto"]);
         echo "<img src='img/".$file_name."' width='".$_POST["ancho"]."' height='".$_POST["alto"]."' />";
      }else{
         print_r($errors);
      }
   }
