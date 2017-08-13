<?php
	require_once("controller/conexao.php");


	$usuario = $_POST["usuario"];
	$senha = md5($_POST["senha"]);

	$objDB = new conexao();
	$link = $objDB->conectaBd();



	$sql = "SELECT * FROM produtos WHERE usuario = '$usuario' AND senha = '$senha' ";

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario["usuario"]){
			echo "Usuario: "

		}
	}




?>