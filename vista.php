<?php
if(!empty($_GET['id'])){
    //Credenciales de conexion
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'images_db';
    
    //Crear conexion con la abse de datos
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    // Cerciorar la conexion
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }
    
    //Extraer imagen de la BD mediante GET
    $result = $db->query("SELECT imagenes FROM images_tabla WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpeg"); 
        echo $imgDatos['imagenes']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>