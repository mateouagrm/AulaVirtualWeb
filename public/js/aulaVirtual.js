function validarAulaVitual(elemento){

	var carrera,materia;
	carrera= document.getElementById("carreraAulaVirtual").value;
  materia= document.getElementById("materiaAulaVirtual").value;
  nombreRegex =/^([a-z-A-Z]+[\s]*)+$/;




   if (carrera==="" || materia==="") {
     elemento=document.getElementById("mensajeAulaVirtual");
     elemento.innerHTML="por favor completa todos los campos";
   	return false;
   }

   if (carrera.length>50) {
     elemento=document.getElementById("mensajeAulaVirtual");
     elemento.innerHTML="el campo carrera no debe superar los 50 caracteres";
    return false;
   }

    if (!nombreRegex.test(carrera)){
      elemento=document.getElementById("mensajeAulaVirtual");
      elemento.innerHTML="El campo carrera solo admite letras";
     return false;
   }

  if (materia.length>50) {
     elemento=document.getElementById("mensajeAulaVirtual");
     elemento.innerHTML="el campo materia no debe superar los 50 caracteres";
    return false;
   }

    if (!nombreRegex.test(materia)){
      elemento=document.getElementById("mensajeAulaVirtual");
      elemento.innerHTML="El campo materia solo admite letras";
     return false;
   }
      
  return true;

}

function validarAulaVitualEdit(elemento){

  var name;
  carrera= document.getElementById("carreraAulaVirtualEdit").value;
  materia= document.getElementById("materiaAulaVirtualEdit").value;
  nombreRegex =/^([a-z-A-Z]+[\s]*)+$/;




   if (carrera==="" || materia==="") {
     elemento=document.getElementById("mensajeAulaVirtualEdit");
     elemento.innerHTML="por favor completa todos los campos";
    return false;
   }

   if (carrera.length>50) {
     elemento=document.getElementById("mensajeAulaVirtualEdit");
     elemento.innerHTML="el campo carrera no debe superar los 50 caracteres";
    return false;
   }

    if (!nombreRegex.test(carrera)){
      elemento=document.getElementById("mensajeAulaVirtualEdit");
      elemento.innerHTML="El campo carrera solo admite letras";
     return false;
   }

  if (materia.length>50) {
     elemento=document.getElementById("mensajeAulaVirtualEdit");
     elemento.innerHTML="el campo materia no debe superar los 50 caracteres";
    return false;
   }

    if (!nombreRegex.test(materia)){
      elemento=document.getElementById("mensajeAulaVirtualEdit");
      elemento.innerHTML="El campo materia solo admite letras";
     return false;
   }
      
  return true;

}




 






