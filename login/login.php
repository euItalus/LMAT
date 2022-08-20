<?php
ob_start();
session_start();
if(isset($_SESSION['email_registro']) && (isset($_SESSION['senha_registro']))){
  header("Location: ../inicio.php");
}

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>LMAT &mdash; Página de Acesso</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="">
						<img class="margin-right" src="img/logo2.png" alt="logo">
					</div>
					<div class="card fat">
						<?php
						include_once('../config/conexao.php');
						//tratamento da acao=negado
						if(isset($_GET['acao'])){
							$acao=$_GET['acao'];
							//echo $acao;
							if($acao=='negado'){
							echo '<br>
							<div class="container">
							<button class="btn btn-block" style="background-color: rgb(212, 26, 26); color: white"> Você Não tem Permissão Para Acessar o LMAT, Efetue o Login. </button>
							</div>';
							header("Refresh:2, login.php");
							}else if($acao=='sair'){
							echo '<br>
							<div class="container">
							<button class="btn btn-block" style="background-color: rgb(212, 26, 26); color: white"> Você Saiu do LMAT, Volte Sempre. </button>
							</div>';
							header("Refresh:2, login.php");
							}
						}
						//criar sessao
						if(isset($_POST['btnlogin'])){
							$login=$_POST['email'];
							$senha=($_POST['senha']);
							$select="SELECT * FROM user WHERE email_registro=:emailLogin AND senha_registro=:senhaLogin";
							try{
							$resultLogin=$conect->prepare($select);
							$resultLogin->bindParam(':emailLogin',$login,PDO::PARAM_STR);
							$resultLogin->bindParam(':senhaLogin',$senha,PDO::PARAM_STR);
							$resultLogin->execute();
	
							$verificar=$resultLogin->rowCount();
							if($verificar>0) {
								$login=$_POST['email'];
								$senha=$_POST['senha'];
								//CRIAR SESSÃO
								$_SESSION['email_registro']=$login;
								$_SESSION['senha_registro']=$senha;
								echo'<br>
								<div class="container">
								<button class="btn btn-success btn-block"> Login Concluído! Redirecionando... </button>
								</div>';
								header("Refresh: 2, ../inicio.php");
							}else{
								echo'<br>
								<div class="container">
								<button class="btn btn-block" style="background-color: rgb(212, 26, 26); color: white"> E-Mail ou Senha Incorretos. </button>
								</div>';
								}
							}catch (PDOException $e){
							echo"<strong> ERRO DE Login= </strong>". $e->getMessage();
						} 
						}
						?>
						<div class="card-body">
							<h4 class="card-title" style="text-align: center; color: rgb(2, 0, 102);">Página de Login</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email">Endereço de E-mail</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email Inválido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Senha
									</label>
									<input id="senha" type="password" class="form-control" name="senha" required data-eye>
								    <div class="invalid-feedback">
								    	É Necessário uma Senha.
							    	</div>
								</div>
								<div class="form-group m-0">
									<button name="btnlogin" type="submit" class="btn btn-block" style="background-color: rgb(2, 0, 102); color: white">
										Acessar
									</button>
								</div>
								<div class="mt-4 text-center">
									Novo no Sistema? <a href="register.php">Cadastre-se.</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
