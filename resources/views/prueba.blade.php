<!DOCTYPE html> 
	<html> 
		<head> 
			<!-- load jQuery --> 
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 

			<!-- provide the csrf token --> 

			<script> 

					function FuncionAjax() {
					 	$("#contenedor").load("/postajax", {variable: "Hola como estas"});
					} 

			</script> 
		</head> 
		<body> 
			<h1 id="contenedor"></h1>
			<input class="getinfo"></input> 
			<button class="postbutton" onclick="FuncionAjax();">Post via ajax!</button> 
			<div class="writeinfo"></div> 
		</body> 
	</html> 
