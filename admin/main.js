$(buscarDatos());


function buscarDatos(consulta) {
  $.ajax({
      url: 'buscar.php',
      type: 'POST',
      dataType: 'html',
      data: {consulta:consulta},
  })
  .done(function(respuesta) {
    $("#datos").html(respuesta);
  })
  .fail(function(){
      console.log('error extrayendo datos')
  })

}


$(document).on('keyup', '#busqueda' , function(){
  let valor = $(this).val();
  if(valor != ''){
    buscarDatos(valor);
  } else {
    buscarDatos();
  }
})


