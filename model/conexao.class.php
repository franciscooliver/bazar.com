<?php 

	class conexao{
		private $host = "localhost";
		private $usuario = "root";
		private $senha  = "";
		private $db = "bd_bazar";

		public function conectaBd(){

			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->db);

			mysqli_set_charset($con, "utf8");


			if(mysqli_connect_errno()){
				echo "Erro ao tentar se conectar com o BD mysql".mysqli_connect_error();
			}

			return $con;
		}

	}

?>