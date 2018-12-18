function entrar() {
	var formData = new FormData($("#form-mail")[0]);
	var ruta = "log/php/usuario.php";
	$.ajax({
	  url: ruta,
	  type: "POST",
	  data: formData,
	  contentType: false,
	  processData: false,
	  success: function(datos)
	  {
		$("#respuesta").fadeIn().html(datos);   
		setTimeout(function() {
		  $("#respuesta").fadeOut();           
		},3000);
	  }
  	});
}