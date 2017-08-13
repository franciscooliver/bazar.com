<?php

	require_once('model/conexao.class.php');

	$usuario = $_POST["usuario_cad"];
	$email = $_POST["email_cad"];
	$senha = md5($_POST["senha_cad"]);


	$objDB = new conexao();
	$link = $objDB->conectaBd();

	

	$nome_existe = false;
	$email_existe  = false;

	//verifica se o usuario digitado ja existe
	$sql = "select * from usuarios where nome = '$usuario'";
	if($resultado_id = mysqli_query($link , $sql)){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario["nome"])){
				$nome_existe = true;

		}

	}else{
			echo "Erro ao buscar registro de usuário";
		}
		
	$sql = "select * from usuarios where email = '$email'";

	//verifica se o email existe

	if($resultado_id = mysqli_query($link , $sql)){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario["email"])){
				$email_existe = true;

		}
			
	}else{
			echo "Erro ao buscar registro de e-mail";
		}

	if($nome_existe || $email_existe){

		$url_get = "";

		if($nome_existe){
			$url_get .= "erro_nome=1&";
			
		}
		if($email_existe){
			$url_get .= "erro_email=1&";
			
		}
		header("Location: cadastro.php?".$url_get);
		die();

	}

	$sql = "insert into usuarios(nome,email,senha) values('$usuario','$email','$senha')";

	//executa a query

	if (mysqli_query($link, $sql)) {
		echo "Usuario cadastrado com sucesso";
	}else{
		echo "Erro na operacao";
	}




?>