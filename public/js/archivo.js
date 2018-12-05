function validarArchivo(elemento){

  var fileInput = document.getElementById('fileArchivo');
  var filePath = fileInput.value;
  var allowedExtensions = /(.pdf|.docx|.doc)$/i;

   if (fileInput.value==="" ) {
     elemento=document.getElementById("mensajeArchivo");
     elemento.innerHTML="por favor seleccione un archivo";
    return false;
    
   }

   if(!allowedExtensions.exec(filePath)){
        elemento=document.getElementById("mensaje_servicio");
        elemento.innerHTML="mensajeArchivo .pdf/.docx/.doc";
        return false;
    }
      
  return true;

}



 






