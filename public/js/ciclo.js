function validarCliclo(elemento){

	var name,puntaje;
	name= document.getElementById("nombreCiclo").value;
  puntaje= document.getElementById("puntajeCliclo").value;
  nombreRegex =/^([a-z-A-Z]+[\s]*)+$/;

   if (name==="" || puntaje==="") {
     elemento=document.getElementById("mensajeCiclo");
     elemento.innerHTML="por favor completa todos los campos";
   	return false;
   }

   if (name.length>50) {
     elemento=document.getElementById("mensajeCiclo");
     elemento.innerHTML="el campo nombre no debe superar los 50 caracteres";
    return false;
   }

    if (!nombreRegex.test(name)){
      elemento=document.getElementById("mensajeCiclo");
      elemento.innerHTML="El campo nombre solo admite letras";
     return false;
   }

  if (puntaje.length>2) {
     elemento=document.getElementById("mensajeCiclo");
     elemento.innerHTML="el campo puntaje solo puede ser de 0-99";
    return false;
   }

  if (puntaje.length<3) {
     for (var i = 0; i < puntaje.length; i++) {
      if (Number.isInteger(parseInt(puntaje[i]))) {
       var cont=1;
      }else{
        elemento=document.getElementById("mensajeCiclo");
        elemento.innerHTML="el campo puntaje no debe contener caracteres";
        return false; 
      }   
     }
    
   }
      
  return true;

}



 






