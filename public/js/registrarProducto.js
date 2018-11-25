var categoriaProducto=null;
/*$("#producto").change(function(e){
	e.preventDefault();
    categoriaProducto = $(this).val();
    var ruta='administrador-categoria/'+categoriaProducto;
    console.log(ruta);
    $.get( ruta, function( data ) {
	  //console.log(data['categorias']['0'].id);

	  $("#categoriaProducto").html('<span class="input-group-addon"><i class="fa fa-th"></i></span>'
	  	                           +'<select class="form-control input-lg" id="subcategoria">'
                                   +'<option selected value="none" disabled="disabled">Selecionar Categoria</option>'
                                   +'<option value="'+data['categorias']['0'].id+'">'
                                   +data['categorias']['0'].nombre+'</option>'
                                   +'</select>');

	});
   
});*/

/*$("#subcategoria").change(function(e){
	e.preventDefault();
    subcategoriaProducto = $(this).val();
    var ruta='administrador-subcategoria/'+subcategoriaProducto;
    console.log(ruta);
    $.get( ruta, function( data ) {
	  //console.log(data['categorias']['0'].id);

	  $("#categoriaProducto").html('<span class="input-group-addon"><i class="fa fa-th"></i></span>'
	  	                           +'<select class="form-control input-lg">'
	  	                           +'<option selected value="none" disabled="disabled">Selecionar Sub-categoria</option>'
                                   +'<option value="'+data['categorias']['0'].id+'">'
                                   +data['categorias']['0'].nombre+'</option>'
                                   +'</select>');

	});
   
})*/