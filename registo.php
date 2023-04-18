
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
							<li><a href="login.php">Login</a></li>
							<li><a href="registo.php" class="active">Registar</a></li>
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
                        <h2><em>Registar conta</em></h2>
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
                 
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="text" name="nome" id="nome" class="form-control input-lg" placeholder="Primeiro nome" tabindex="1" required>
	</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="text" name="apelido" id="apelido" class="form-control input-lg" placeholder="Último nome" tabindex="2" required>
	</div>
	</div>
	</div>          
	<div class="form-group">
	<input type="text" name="tlm" id="tlm" class="form-control input-lg" placeholder="Telemóvel" tabindex="3">
	</div>
	<div class="form-group">
	<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Endereço de Email" tabindex="4" required>
	</div>
	<div class="form-group">
	<input type="text" name="morada" id="morada" class="form-control input-lg" placeholder="Morada" tabindex="4"></div>
            
	<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="text" name="codpostal" id="codpostal" class="form-control input-lg" placeholder="Código Postal" tabindex="4">
	</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="text" name="localidade" id="localidade" class="form-control input-lg"      placeholder="Localidade" tabindex="4">
	</div>
	</div>
	</div>
              
	<div class="form-group">
	<input type="text" name="distrito" id="distrito" class="form-control input-lg" placeholder="Distrito" tabindex="4">
	</div>
              
	<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="password" name="password" id="password" class="form-control input-lg"      placeholder="Password" tabindex="4" required>
	</div>
</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
	<div class="form-group">
	<input type="password" name="password1" id="password1" class="form-control input-lg" placeholder="Confirme a password" tabindex="4" required>
</div>
	</div>
	</div>
	<hr/>
	<div class="row">
	<div class="col-xs-6 col-md-6">
	<button type="submit" value="registar" name="registar" class="btn btn-primary btn-block btn-lg" tabindex="7">Criar a conta</button>
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
	if(isset($_POST['registar']) 
	&& isset($_POST['nome']) && isset($_POST['apelido']) && isset($_POST['tlm']) 
	&& isset($_POST['email']) && isset($_POST['morada']) && isset($_POST['codpostal']) 
	&& isset($_POST['localidade']) && isset($_POST['distrito']) && isset($_POST['password'])  && isset($_POST['password1'])){
	$sql = "INSERT INTO utilizador(nome, apelido, telef, email, morada, cod_postal, localidade, distrito, pass) VALUES ('".$_POST['nome']."', '".$_POST['apelido']."', '".$_POST['tlm']."', '".$_POST['email']."', '".$_POST['morada']."', '".$_POST['codpostal']."', '".$_POST['localidade']."', '".$_POST['distrito']."', '".$_POST['password1']."')";
	$result = $conn->query($sql);
	echo "<script>location.href = 'menus.php'</script>";
	}
  ?>

  </body>
  
 
 
  </html>