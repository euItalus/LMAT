<?php
  ob_start(); //armazena coisas em cache
  session_start();//inicia sessão
  if(!isset($_SESSION['usuario_registro'])&&(!isset($_SESSION['senha_registro']))){
   header("Location: ../login/login.php?acao=negado");
  }
  include_once('sair.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>LMAT - Basquete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
	<link href="assets/images/favicon/logo_ball.png" type="image/png" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">   
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
</head>
<body>
	<div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="../inicio.html"><img src="assets/images/logo/lmat.png" alt="Logo" srcset="" style="width: 170px; height: 70px"></a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar" style="background-color: rgb(2, 0, 102);">
                    <div class="container">
                        <ul>
                            <li
                                class="menu-item  ">
                                <a href="../inicio.html" class='menu-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li
                                class="menu-item  has-sub">
                                <a href="" class='menu-link'>
                                    <i class="bi bi-stack"></i>
                                    <span>Modalidades</span>
                                </a>
                                <div
                                    class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item">
                                                <a href="futmasculino.php" class='submenu-link'>Futsal Masculino - A</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="futmasculinoB.php" class='submenu-link'>Futsal Masculino - B</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="futfeminino.php" class='submenu-link'>Futsal Feminino - A</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="futfemininoB.php" class='submenu-link'>Futsal Feminino - B</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="volei.php" class='submenu-link'>Vôlei - A</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="voleiB.php" class='submenu-link'>Vôlei - B</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="carimba.php" class='submenu-link'>Carimba</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="basquete.php" class='submenu-link'>Basquete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                </nav>
            </header>  
        </div>   
    </div>
<div class="container">
		<div class="main-body">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-body">
                        <?php
                            include_once('../config/conexao.php');
                            $id = $_GET['idUp'];
                            $select = "SELECT * FROM tb_basquete WHERE id_basquete=:id";
                            try{
                            $result = $conect->prepare($select);
                            $result ->bindParam(':id',$id, PDO::PARAM_INT);
                            $result -> execute();
                            $contar=$result->rowCount();
                            if($contar>0){
                                while($show=$result->FETCH(PDO::FETCH_OBJ)){
                                $idTime = $show->id_basquete; 
                                $nomeTime = $show->nome_basquete;
                                $pTime = $show->p_basquete;
                                $vTime = $show->v_basquete;
                                $dTime = $show->d_basquete;
                                $spTime = $show->sp_basquete;
                                $psTime = $show->ps_basquete;
                                $pfTime = $show->pf_basquete;
                                $fotoTime = $show->foto_basquete;
                                }
                            }
                            }catch(PDOException $id){}
                        ?>  
                            <form  action="" method="post" enctype="multipart/form-data">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="assets/images/times/<?php echo $fotoTime ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                </div>
                                <hr class="my-4">
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">Nome</h6>
                                        <input name="nome" type="text" class="form-control" value="<?php echo $nomeTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">P</h6>
                                        <input name="p" type="text" class="form-control" value="<?php echo $pTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">V</h6>
                                        <input name="v" type="text" class="form-control" value="<?php echo $vTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">D</h6>
                                        <input name="d" type="text" class="form-control" value="<?php echo $dTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">SP</h6>
                                        <input name="sp" type="text" class="form-control" value="<?php echo $spTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">PS</h6>
                                        <input name="ps" type="text" class="form-control" value="<?php echo $psTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">pf</h6>
                                        <input name="pf" type="text" class="form-control" value="<?php echo $pfTime ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">FOTO DO TIME</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input name="foto" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Upload da foto</label>
                                    </div>
                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-secondary">
                                        <input name="btnUp" type="submit" class="btn btn-primary px-4" value="Atualizar Dados">
                                        <input type="reset" class="btn btn-light-secondary px-2" value="Resetar">
                                        
                                    </div>
                                </div>
                                <hr class="my-4">
                            </form>
                                <?php
                                    if(isset($_POST['btnUp'])){
                                        $nome = $_POST['nome'];
                                        $p = $_POST['p'];
                                        $v = $_POST['v'];
                                        $d = $_POST['d'];
                                        $sp = $_POST['sp'];
                                        $ps = $_POST['ps'];
                                        $pf = $_POST['pf'];
                                        
                                        if(!empty($_FILES['foto']['name'])){
                                            $formatP = array("png","jpg","jpeg","JPG","gif");
                                            $extensao = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
                                            if(in_array($extensao, $formatP)){
                                            $pasta = "assets/images/times/";
                                            $temporario = $_FILES['foto']['tmp_name'];
                                            $novoNome = uniqid().".$extensao";
                                            if(move_uploaded_file($temporario, $pasta.$novoNome)){

                                                
                                            }else{
                                                echo "Erro não foi possível fazer o upload do arquivo!";
                                            }
                                            }else{
                                            echo "Formato Inválido";
                                            }
                                        }else{
                                            $novoNome = $fotoTime;
                                        }
                                        $editar = "UPDATE tb_basquete SET nome_basquete=:nome,foto_basquete=:foto,p_basquete=:p,v_basquete=:v,d_basquete=:d,sp_basquete=:sp,ps_basquete=:ps,pf_basquete=:pf WHERE id_basquete=:id";

                                        $cadastro = "INSERT INTO tb_basquete (nome_basquete, foto_basquete, p_basquete, v_basquete, d_basquete, sp_basquete, ps_basquete, pf_basquete) VALUES (:nome, :foto, :p, :v, :d, :sp, :ps, :pf)";
                                        try{
                                            $resultado = $conect->prepare($editar);
                                            $resultado->bindParam(':id',$id,PDO::PARAM_STR);
                                            $resultado->bindParam(':nome',$nome,PDO::PARAM_STR);
                                            $resultado->bindParam(':p',$p,PDO::PARAM_STR);
                                            $resultado->bindParam(':v',$v,PDO::PARAM_STR);
                                            $resultado->bindParam(':d',$d,PDO::PARAM_STR);
                                            $resultado->bindParam(':sp',$sp,PDO::PARAM_STR);
                                            $resultado->bindParam(':ps',$ps,PDO::PARAM_STR);
                                            $resultado->bindParam(':pf',$pf,PDO::PARAM_STR);
                                            $resultado->bindParam(':foto',$novoNome,PDO::PARAM_STR);
                                            $resultado->execute();
                                            $contar = $resultado->rowCount();
                                            if($contar > 0){
                                            echo '<div class="container">
                                                        <div class="alert alert-success alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h5><i class="icon fas fa-check"></i>Time editado com sucesso!</h5>
                                                    </div>
                                                    </div>';
                                            }else{
                                            echo '<div class="container">
                                                        <div class="alert alert-danger alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h5><i class="icon fas fa-check"></i>Ops! Time não editado!</h5>
                                                    </div>
                                                    </div>';
                                            }
                                        }catch(PDOException $e){
                                            echo "<strong>ERRO DE CADASTRO PDO </strong>".$e->getMessage();
                                        }
                                    }
                                ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>   
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/pages/horizontal-layout.js"></script>

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/jszip/jszip.min.js"></script>
    <script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<style type="text/css">
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>