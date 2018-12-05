function validarRequisito(elemento){

	var name,puntaje;
	name= document.getElementById("nombreRequisito").value;
  puntaje= document.getElementById("puntajeRequisito").value;
  nombreRegex =/^([a-z-A-Z]+[\s]*)+$/;


   if (name==="" || puntaje==="") {
     elemento=document.getElementById("mensajeRequisito");
     elemento.innerHTML="por favor completa todos los campos";
   	return false;
   }

   if (name.length>50) {
     elemento=document.getElementById("mensajeRequisito");
     elemento.innerHTML="el campo name no debe superar los 50 caracteres";
    return false;
   }

    if (!nombreRegex.test(name)){
      elemento=document.getElementById("mensajeRequisito");
      elemento.innerHTML="El campo name solo admite letras";
     return false;
   }

   if (puntaje.length>0) {
     for (var i = 0; i < puntaje.length; i++) {
      if (Number.isInteger(parseInt(puntaje[i]))) {
       var cont=1;
      }else{
        elemento=document.getElementById("mensajeRequisito");
        elemento.innerHTML="el campo puntaje no debe contener caracteres";
        return false; 
      }   
     }
    
   }
      
  return true;

}

//implementar en la vista
/*function validarRequisitoEdit(elemento){

  var name,puntaje;
  name= document.getElementById("nombreRequisitoEdit").value;
  puntaje= document.getElementById("puntajeRequisitoEdit").value;
  nombreRegex =/^([a-z-A-Z]+[\s]*)+$/;


   if (name==="" || puntaje==="") {
     elemento=document.getElementById("mensajeRequisitoEdit");
     elemento.innerHTML="por favor completa todos los campos";
    return false;
   }

   if (name.length>50) {
     elemento=document.getElementById("mensajeRequisitoEdit");
     elemento.innerHTML="el campo name no debe superar los 50 caracteres";
    return false;
   }

    if (!nombreRegex.test(name)){
      elemento=document.getElementById("mensajeRequisitoEdit");
      elemento.innerHTML="El campo name solo admite letras";
     return false;
   }

   if (puntaje.length>0) {
     for (var i = 0; i < puntaje.length; i++) {
      if (Number.isInteger(parseInt(puntaje[i]))) {
       var cont=1;
      }else{
        elemento=document.getElementById("mensajeRequisitoEdit");
        elemento.innerHTML="el campo puntaje no debe contener caracteres";
        return false; 
      }   
     }
    
   }
      
  return true;

}*/




 






