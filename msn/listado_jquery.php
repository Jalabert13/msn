<html>
<head>
	
	<script src="jquery-3.6.0.min.js"></script>
	
	<script type="text/javascript">

		function recargar() {
			$.ajax({
                type:'POST',
                url:'empleados.php',
                success:function(html){
                    $('#lista').html(html);
                }
            }); 
		}

		// cada 10 segundos refrescamos el listado
		setInterval(recargar, 10000);
		
	</script>
</head>
<body>

<h1>Empleados</h1>
<div id="lista">
</div>

</body>
</html>