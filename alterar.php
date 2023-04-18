<html lang="pt-pt">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Food Store Website Template</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
	<?php
   session_start();
    include('conn.php');
	

?>
    
    <!-- ***** Preloader Start ***** -->
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
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <?php
		if (isset($_SESSION['id']))
		{
	?>
    <!-- ***** Header Area Start ***** -->
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
                            <li><a href="index.php" >Home</a></li>
							<li><a href="conta.php">Conta</a></li>
							<li><a href="menus.php">Menus</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
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
	<?php
		}
	?>
	
	
	<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
						<h2>Alterar</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- buscar os valores todos à BD e transformar em variáveis em vez de fazer uma querie em cada txtbox-->
<br>
<?php 
		$sql = "SELECT * FROM produto WHERE id_produto = '".$_GET['produto']."'"; 
		$result = $conn->query($sql);
		if($result->num_rows>0){
			while($row = $result->fetch_assoc())
			{
				$id = $row['id_produto'];
				$categoria = $row['id_categoria'];
				$nome = $row['nome'];
				$descriçao = $row['descricao'];
				$quantidade = $row['quantidade'];
				$preço = $row['preço'];
				$foto = $row['foto'];
				//$ = $row[''];
			};
		};
	?>
<section class="section">
        <div class="container">
<form method="post">
	<label>ID produto</label><br>
	
	<input type="text" name="id_produto" value="
	<?php 
		echo $id;
	?>
	
	"><br><br>						
	<label>ID categoria</label><br>
	<input type="text" readonly name="id_categoria" value="
	<?php 
		echo $categoria;
	?>"><br><br>
	<label>Nome</label><br>
	<input type="text" name="nome" value="
	<?php 
		echo $nome;
    ?>  
	"><br><br>
	<label size="60">Descrição</label><br>
	<input type="text" style="height: 50px; "  name="descriçao" value="
	<?php 
		echo $descriçao; 
		?>"><br><br>
	<label>Quantidade</label><br>
    <input type="text" name="quantidade" value="
	<?php 
		echo $quantidade;
	?>  
	"><br><br>
	<label>Preço</label><br>
    <input type="text" name="preço" value="
	<?php 
		echo $preço;
	?>  
	"><br><br>
	<label>Foto</label><br>
    <input type="text" name="foto" value="
	<?php 
		echo $foto;
	?>  
	"><br><br><br>
	<input type="submit" name="alterar" value="Alterar">
</form>
       </div>
    </section>

<?php

	if(isset($_POST['alterar']) 
	&& isset($_POST['id_produto']) && isset($_POST['id_categoria']) && isset($_POST['nome']) 
	&& isset($_POST['descriçao']) && isset($_POST['quantidade']) && isset($_POST['preço']) 
	&& isset($_POST['foto'])){
	$sql = "UPDATE produto SET 
			id_produto = '".$_POST['id_produto']."', 
			id_categoria = '".$_POST['id_categoria']."', 
			nome = '".$_POST['nome']."', 
			descricao = '".$_POST['descriçao']."', 
			quantidade = '".$_POST['quantidade']."', 
			preço = '".$_POST['preço']."', 
			foto = '".$_POST['foto']."' 
			WHERE id_produto = '".$_GET['produto']."'";
	$result = $conn->query($sql);
	echo "<script>location.href = 'menus.php'</script>";
	}

?>

    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>