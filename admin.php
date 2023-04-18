<html lang="pt-pt">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login User</title>
   
	<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->
	<link href="css/estilos.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
 

	<!-- jQuery (Bootstrap's JavaScript plugins) -->
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
  
  
  
  </head>
  
 
  <body>
   <?php
   if (isset($_SESSION['id']) && isset($_SESSION['email']))
   {
	   session_destroy();
   }
   session_start();
   
    include('conn.php');
	
	$sql = "SELECT * FROM utilizador";
	$result = $conn->query($sql);
?>
  
  
  <!--
 <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  -->
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
							<li><a href="login.php" >Login</a></li>
							<!--<li><a href="conta.php">Conta</a></li>-->
                            <li><a href="menus.php">Menus</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            
                            <li><a href="admin.php" class="active">Admin</a></li>  
							
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
                        <h2><em>Login</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  
  
  <div class="container">
  
	<div id="login-overlay" class="modal-dialog">
	<div class="modal-content">
	
	<div class="modal-body">
	<div class="row">
	<div class="col-xs-6">
	<div class="well">
	<form id="loginForm" method="POST" style="padding-left: 10%;width:450px">
<div class="form-group">
	<label for="email" class="control-label">Email</label>
	<input type="email" class="form-control" name="email" id="email" value="" required title="Introduza o seu email" placeholder="email">
	<span class="help-block"></span>
	</div>
	<div class="form-group">
	<label for="password" class="control-label">Password</label>
	<input type="password" class="form-control" name="password" id="password" placeholder="password" value="" required title="Introduza a password">
	<span class="help-block"></span>
	</div>
	<?php if(isset($msg)) { ?>
	<div id="loginErrorMsg" class="alert alert-danger"><?php echo $msg; ?></div>
	<?php } ?>
	<button type="submit" value="login" name="login" class="btn btn-success      btn-block">Aceder à conta</button> 
	<br>
	<br>
	</form>
	</div>
	</div>
	
</div>
	</div>
	</div>
 
   </div>
 
  </div>
  
  
	<?php
	
	
	/*if(isset($_POST['email']) && isset($_POST['password']))
	{
		function validar($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	};*/
	$emailAdmin = $_POST['email'];
	$pass = $_POST['password'];
	
	
	
	$sql = "SELECT * FROM admin WHERE emailAdmin = '$emailAdmin' AND password = '$pass'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) === 1)
	{
		
		$row = mysqli_fetch_assoc($result);
		if($row['emailAdmin'] === $emailAdmin && $row['password'] === $pass)
		{
			$_SESSION['emailAdmin'] = $row['emailAdmin'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['id'] = $row['id_admin'];
			echo "<script>location.href = 'menus.php'</script>";
			exit();
		}
	}
	
	
	mysqli_free_result($result);
	//mysqli_close($link);
	?>


  
  </body>
 


 </html>
