<form method="post">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>


<?php

$_POST['busca'] = '<script>alert("a")</script>';

if (isset($_POST['busca'])){
	echo strip_tags($_POST['busca']) . "<br>";
	echo htmlentities(($_POST['busca']));
}

?>