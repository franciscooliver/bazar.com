<?php

	require_once('model/conexao.class.php');

	$usuario = $_POST["usuario_cad"];
	$email = $_POST["email_cad"];
	$senha = md5($_POST["senha_cad"]);


	$objDB = new conexao();
	$link = $objDB->conectaBd();

	$sql = "insert into usuarios(nome,email,senha) values('$usuario','$email','$senha')";

	//executa a query

	if (mysqli_query($link, $sql)) {
		echo "Usuario cadastrado com sucesso";
	}else{
		echo "Erro na operacao";
	}




?>