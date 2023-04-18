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
	
	$sql = "SELECT * FROM produto";
	$result = $conn->query($sql);
	
	
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
		if(isset($_SESSION['id']))
		{
	?>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">Food Store <em> Website</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
							<!--<li><a href="login.php">Login</a></li>-->
							<li><a href="conta.php">Conta</a></li>
							<li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menus</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="menus.php">Menus</a>
                                    <a class="dropdown-item" href="bebidas.php">Bebidas</a>
                                    <a class="dropdown-item" href="sobremesas.php" class="active">Sobremesas</a>
                                </div>
                            </li>
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
    <!-- ***** Header Area End ***** -->
	<?php
		}
		else
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
                            <li><a href="index.php">Home</a></li>
							<li><a href="login.php">Login</a></li>
							<!--<li><a href="conta.php">Conta</a></li>-->
							<li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menus</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="menus.php">Menus</a>
                                    <a class="dropdown-item" href="bebidas.php">Bebidas</a>
                                    <a class="dropdown-item" href="sobremesas.php" class="active">Sobremesas</a>
                                </div>
                            </li>
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
	<?php
		}
	?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
	
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>As nossas <em>sobremesas</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>



            <div class="row">
			<?php

				$sql = "SELECT * FROM produto WHERE id_categoria = 'SOBREMESA'";
				$result = $conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
						
                echo'<div class="col-lg-4">';
                    echo'<div class="trainer-item">';
                        echo'<div class="image-thumb">';
                            echo'<img src="imagens/'. $row["foto"] .'" alt="">';
                        echo'</div>';
                        echo'<div class="down-content">';
                            echo'<span>';
                                 echo $row["preço"] . '<sup>€ </sup>';
                            echo'</span>';

                            echo'<h4>'. $row["nome"] .'</h4>';

                            echo'<p>'. $row["descricao"] .'</p>';

                            echo'<ul class="social-icons">';
								if (isset($_SESSION['id']) && isset($_SESSION['emailAdmin']))
								{
                                echo"<li><a href='alterar.php?produto=".$row['id_produto']."'> · Alterar</a></li><br>";
								echo"<li><a href='remover.php?produto=".$row['id_produto']."'> · Remover</a></li>"; 
								}
								else
								{
								echo"<li><a href='product-details.php?produto=".$row['id_produto']."'>+ Adicionar</a></li>";
								};
								
                            echo'</ul>';
                        echo'</div>';
                    echo'</div>';
                echo'</div>';
				};
				} else{
					echo "0 resultados";
				};
				if (isset($_SESSION['id']) && isset($_SESSION['emailAdmin']))
				{
				echo'<div class="col-lg-4">';
                    echo'<div class="trainer-item">';
                        echo'<div class="image-thumb">';
                            echo'<img src="imagens/blank.jpg" alt="">';
                        echo'</div>';
                        echo'<div class="down-content">';
                            echo'<span>';
                                 echo  '<p>0.00 <sup>€ </sup></p>';
                            echo'</span>';

                            echo'<h4></h4>';

                            echo'<p></p>';

                            echo'<ul class="social-icons">';
								
								
								echo"<li><a href='adicionar.php'>+ Adicionar</a></li>";
								
								
                            echo'</ul>';
                        echo'</div>';
                    echo'</div>';
                echo'</div>';
				}
			?>
                
            </div>

            <br>
                
            

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
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