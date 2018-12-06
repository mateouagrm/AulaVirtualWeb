function validarArchivo(id){

  var fileInput = document.getElementById(id+'f');
  var filePath = fileInput.value;
  var allowedExtensions = /(.pdf|.docx|.doc)$/i;

   if (fileInput.value==="" ) {
     elemento=document.getElementById("mensajeArchivoId");
     elemento.innerHTML="por favor seleccione un archivo";
     return false;
   }

   if(!allowedExtensions.exec(filePath)){
        elemento=document.getElementById("mensajeArchivoId");
        elemento.innerHTML="archivos aceptados .pdf/.docx/.doc";
        return false;
    }
      
  return true;

}



 






