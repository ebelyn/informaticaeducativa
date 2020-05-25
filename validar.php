<html>
<?php
//validación del formulario
 var_dump($_post);
?>
</head>
<title>web informatica </title>
<style>
div label{
	display:block;
	 width: 25%;}
input{
	border: solid 2px black;}
</head>
</style>
<body>
<h1> Formulario de Ingreso </h1>
<form name="form1" method="post" action="validar.php">
<fieldset>
<legend> Datos de Ingreso </legend> 
 <div>
<label> Nombre </label>
<input type="text" name=" nombre" />
</div>
<div>
<label> Edad </label>
<input type="text" name=" edad" />
</div>
<div>
<input type="submit"  value="validar" />
</div>
 </form>


</fieldset>

</body>
</html>
<body>
</body>
</html>