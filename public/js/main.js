
function GraficarDatos(){
		$(document).ready(function(){
			var variable="Esta es mi variable que voy a pasar";
			$("#contenedor").load("index2.php",{telopaso:variable});
		});
}