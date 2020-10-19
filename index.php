<?php require( 'init.php' ) ?>

<script type="text/javascript">
/* Capturamos los valores del formulario */
function envioFormulario() {
	var sexo=document.formCalorias.botonSexo.value;
	var edad=document.formCalorias.edad.value;
	var altura=document.formCalorias.altura.value;
	var peso=document.formCalorias.peso.value;
	var factor=document.formCalorias.botonDF.value;

	if (sexo!="") {
		document.cookie='sexo='+sexo;
	}
	if (edad!="") {
		document.cookie='edad='+edad;
	}
	if (altura!="") {
		document.cookie='altura='+altura;
	}
	if (peso!="") {
		document.cookie='peso='+peso;
	}
	if (factor!="") {
		document.cookie='factor='+factor;
	}
	document.cookie='envio='+true;
}
</script>

<?php
$error = false;
$resultado = false;
/* Si el formulario ha sido enviado llamamos a la función para verificar que los datos son correctos */
if (isset($_COOKIE['envio']) && $_COOKIE['envio']==true) {
	$error = errorForm();
	$resultado = true;
}
?>

<?php require('templates/header.php'); ?>

<!-- Cargamos la plantilla de cálculo o la de formulario -->
<?php if($resultado && !$error) {
	require('calculo.php');
}
else {
	require('formulario.php');
} ?>

<?php require('templates/footer.php'); ?>
