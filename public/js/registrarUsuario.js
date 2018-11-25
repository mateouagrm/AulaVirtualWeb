var tipo=null;
$("#tipo").change(function(){
    tipo = $(this).val();
    if(tipo=='coordinador'){
     $('#visibleUsuario').show();
   }else{
    $('#visibleUsuario').hide();
   }
   
})