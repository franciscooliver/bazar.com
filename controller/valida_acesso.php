<?php
	session_start();
	require_once('../model/conexao.class.php');


	$usuario = $_POST["usuario"];
	$senha = base64_encode($_POST["password"]);
	echo $senha;

	$objDB = new conexao();
	$link = $objDB->conectaBd();


	$sql = " select * from usuarios where usuario = '".$usuario."' AND senha ='".$senha."'";

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){

			$_SESSION["usuario"]  = $dados_usuario["usuario"];
			$_SESSION["email"] = $dados_usuario["email"];
			
			header('Location: ../index.php');

		}else{
			header('Location: ../index.php?erro=1');
		}

	} else {

		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}


?>


