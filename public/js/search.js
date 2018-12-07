var buscador = $("#table").DataTable();
var cont3=1;
//$("#input-search").keyup(function(){
	$("#busque").click(function(){
    //buscador.search($(this).val()).draw();

  
    if ($("#input-search").val() == ""){
        $(".content-search").fadeOut(300);
    }else{
        $(".content-search").fadeIn(300);
        var texto=$("#input-search").val();
		var url = '/buscar/'+texto;
		$.get(url,function(resul){
			console.log(resul);
			
		var datos= jQuery.parseJSON(resul);
		    console.log(datos);
		   for (var cant = cont3; cant > 1; cant--) {
		   	cont3--;
		   	document.getElementById("table").deleteRow(cant);
		   }
		   //{{ url('/posts') }}
		    $.each( datos, function( key, value ) {
    			console.log(value.nombre);
    			var fila= '<tr id="fila'+cont3+'"><td style="text-align: center;"><a  href="'+value.ruta+'" style="color: #ffff;"><h3>'+value.nombre+' tipo-'+value.tipo+'</h3></a></td></tr>';
                                 
				cont3++;
				$('#table').append(fila);
			});
	
		})
		
    }

})