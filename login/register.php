<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>LMAT &mdash; Página de Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="">
						<img class="margin-right" style="text-align: center;" src="img/logo2.png" alt="logo">
					</div>
					<div class="card fat">
									<?php 
										include_once('../config/conexao.php');
										if(isset($_POST['btnCContato'])){
										$nome=$_POST['nome'];
										$senha=($_POST['senha']);
										$email=$_POST['email'];
		
										$foto = random_int(1,9).".jpg";
		
										$cadastro="INSERT INTO user(usuario_registro,email_registro,senha_registro,foto_registro) VALUES(:nome,:email,:senha,:foto)";                   
										try{
											$result=$conect-> prepare ($cadastro);
											$result->bindParam(':nome',$nome,PDO::PARAM_STR);
											$result->bindParam(':email',$email,PDO::PARAM_STR);
											$result->bindParam(':senha',$senha,PDO::PARAM_STR);
											$result->bindParam(':foto',$foto,PDO::PARAM_STR);
											$result->execute();
											$contar=$result->rowCount();
											if($contar > 0){
												echo '<div class="container">
													<br>	
													<button class="btn btn-success btn-block"> Cadastro Efetuado! Redirecionando... </button>
												</div>';
												header("refresh:5,login.php");                            
											}
											else{
												echo '<div class="container">
													</div>';
												header("refresh:2,register.php");
											}
										}
										catch (PDOException $e){
											echo"<strong> ERRO DE CADASTRO PDO = </strong>". $e->getMessage();
										}
		
										}
									?>
						<div class="card-body">
							<h4 class="card-title" style="text-align: center; color: rgb(2, 0, 102)">Cadastro de Novo Usuário</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="name">Nome de Usuário</label>
									<input id="name" name="nome" type="text" class="form-control" name="name" required autofocus>
									<div class="invalid-feedback">
										Insira um Nome de Usuário.
									</div>
								</div>

								<div class="form-group">
									<label for="email">Endereço de E-mail</label>
									<input id="email" name="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										E-mail Inválido.
									</div>
								</div>

								<div class="form-group">
									<label for="password">Senha</label>
									<input id="password" name="senha" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Insira uma Senha.
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">Eu Concordo Com os <a href="#">Termos de Serviço.</a></label>
										<div class="invalid-feedback">
											Você Precisa Concordar com os Termos de Serviço.
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button name="btnCContato" type="submit" class="btn btn-block" style="background-color: rgb(2, 0, 102); color: white">Concluir Cadastro</button>
								</div>
								<div class="mt-4 text-center">
									Já Está Cadastrado? <a href="login.php">Efetue o Login.</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>