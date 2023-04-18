<html lang="pt-pt">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<meta name="author" content="">
	<title>Registo</title>
  
	<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->
	<link href="css/estilos.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
  
  
	<!-- jQuery (Bootstrap's JavaScript plugins) -->
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
  
 
  
  </head>
  
  
  <body>
  <?php
  session_start();
    include('conn.php');
	
	$sql = "SELECT * FROM utilizador";
	$result = $conn->query($sql);
	
	
	
?>
  
  <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo"><em>Tasca</em> do <em>Toni</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php">Home</a></li>
							<li><a href="conta.php" class="active">Conta</a></li>
							<!--<li><a href="conta.php">Conta</a></li>-->			
                            <li><a href="menus.php">Menus</a></li>
                            <li><a href="checkout.php">Checkout</a></li>                        
                            <li><a href="admin.php">Admin</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><em>Conta</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  <br>
  <div class="container">
  
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" >
	<form role="form" method="post">
	<div class="row">
    <?php 
	if (isset($_SESSION['email']))
		{
		$sql = "SELECT * FROM utilizador WHERE id_utilizador = '".$_SESSION['id']."'"; $result = $conn->query($sql);
		if($result->num_rows>0){
			while($row = $result->fetch_assoc())
			{
				$nome = $row['nome'];
				$apelido = $row['apelido'];
				$telef = $row['telef'];
				$email = $row['email'];
				$morada = $row['morada'];
				$cod_postal = $row['cod_postal'];
				$localidade = $row['localidade'];
				$distrito = $row['distrito'];
				$pass = $row['pass'];
				//$ = $row[''];
			};
		};
	
	?>             
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="text" name="nome" id="nome" class="form-control input-lg" value = "
	<?php 
		echo $nome;
	?>"  >
	</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="text" name="apelido" id="apelido" class="form-control input-lg" value = "
	<?php 
		echo $apelido;
	?>    
	"   >
	</div>
	</div>
	</div>          
	<div class="form-group">
	<input type="text" name="tlm" id="tlm" class="form-control input-lg" value = "
	<?php 
		echo $telef;
	?>    
	" >
	</div>
	<div class="form-group">
	<input type="email" name="email" id="email" class="form-control input-lg" value = "
	<?php 
		echo $email;
	?>    
	" >
	</div>
	<div class="form-group">
	<input type="text" name="morada" id="morada" class="form-control input-lg" value = "
	<?php 
		echo $morada;
	?>     
	" </div>
            
	<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="text" name="codpostal" id="codpostal" class="form-control input-lg" value = "
	<?php 
		echo $cod_postal;
	?>   
	" > 
	</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="text" name="localidade" id="localidade" class="form-control input-lg"      value = "
	<?php 
		echo $localidade;
	?>   
	" > 
	</div>
	</div>
	</div>
              
	<div class="form-group">
	<input type="text" name="distrito" id="distrito" class="form-control input-lg" value = "
	<?php 
		echo $distrito;
	?>  
	" >
	</div>
              
	<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="text" name="password" id="password" class="form-control input-lg"      value = "
	<?php 
		echo $pass;
	?>  
	" > 
	</div>
</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
</div>
	</div>
	</div>
	<hr/>
	<div class="row">
	<div class="col-xs-6 col-md-6">
	<button type="submit" value="alterar" name="alterar"
	
	class="btn btn-primary btn-block btn-lg" tabindex="7">Alterar</button>
	
	<button type="button" value="apagar" name="apagar" class="btn btn-primary btn-block btn-lg" tabindex="7">Apagar</button>
	<?php
	};
	?>
	<button type="submit" value="signout" name="signout"  class="btn btn-primary btn-block btn-lg" tabindex="7">Sair</button>
	</div>
	</div>
              
	<div class="row">
	<?php if(isset($msg)) { ?>
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<p><span  class="alert-danger"><?php echo $msg; ?></span></p>
	</div>
<?php } ?>          
	</div>
	</div>     
	</form>
	</div>
	</div> 
	
  </div>

<?php
			if (isset($_POST['alterar'])
			&& isset($_POST['nome']) && isset($_POST['apelido']) && isset($_POST['tlm']) 
			&& isset($_POST['email']) && isset($_POST['morada']) && isset($_POST['codpostal']) 
			&& isset($_POST['localidade']) && isset($_POST['distrito']) && isset($_POST['password'])  && isset($_POST['password1']))
			{
			$sql = "UPDATE utilizador SET 
			nome = '".$_POST['nome']."', 
			apelido = '".$_POST['apelido']."', 
			telef = '".$_POST['tlm']."', 
			email = '".$_POST['email']."', 
			morada = '".$_POST['morada']."', 
			cod_postal = '".$_POST['codpostal']."', 
			localidade = '".$_POST['localidade']."', 
			distrito = '".$_POST['distrito']."', 
			pass = '".$_POST['password']."' 
			WHERE id_utilizador = '".$_SESSION['id']."'";	
			$result = $conn->query($sql);
			};
		if (isset($_POST['apagar']))
		{
		$sql = "DELETE FROM utilizador WHERE id_utilizador = '".$_SESSION['id']."'";
		$result = $conn->query($sql);
		};
		if (isset($_POST['signout']))
		{
			session_destroy();
			echo "<script>location.href = 'index.php'</script>";
		};
	
?>


  </body>
  
 
 
  </html>