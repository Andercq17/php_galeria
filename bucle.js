window.onload=function(){
    var boton=document.getElementById("buscar");
    boton.addEventListener('click',prueba);
}
function prueba(){
    var info = document.getElementById("info");
    var nimagenes = document.getElementById("numero").value;
    var message='';
    var tmp;
    for(var i=1; i<=nimagenes; i++){
        tmp = '<img src="vista.php?id='+i+'"alt="Imagen desde Blob" width="200" heigh="300"/> ';  
        message=message+tmp;
    }
    info.innerHTML=message; 

}