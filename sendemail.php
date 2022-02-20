<?php
$name = $_POST['nombre'];
$telefono = $_POST['telefono']; 
$email = $_POST['email'];
$texto = $_POST['texto'];
//Fin de recepción de datos

//Accion e envios
$texto = '
Datos del formulario:

Nombre: '.$name.'
Telefono: '.$telefono.'
Texto: '.$texto.'
';
mail('info@instamobel.com', 'Formulario de contacto instamobel', utf8_decode($texto), 'From: ' . utf8_decode($name) . ' <' . $email . '>');
header('Location: index.html#emai-sen');
?>