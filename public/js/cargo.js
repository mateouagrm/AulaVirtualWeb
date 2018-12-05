function validar(elemento){

	var name;
	name= document.getElementById("nombreCargo").value;
  nombreRegex =/^([a-z-A-Z]+[\s]*)+$/;




   if (name==="") {
     elemento=document.getElementById("mensajeCargo");
     elemento.innerHTML="por favor completa todos los campos";
   	return false;
   }

   if (name.length>50) {
     elemento=document.getElementById("mensajeCargo");
     elemento.innerHTML="el campo nombre no debe superar los 50 caracteres";
    return false;
   }

    if (!nombreRegex.test(name)){
      elemento=document.getElementById("mensajeCargo");
      elemento.innerHTML="El campo nombre solo admite letras";
     return false;
   }
      
  return true;

}



 






