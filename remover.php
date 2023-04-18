<?php

session_start();
    include('conn.php');
	
	$sql = "DELETE FROM produto where id_produto = '".$_GET['produto']."'";
						$result = $conn->query($sql);
				
						if ($conn->query($sql) === TRUE) {
				  			echo"<h2>ITEM APAGADO COM SUCESSO</h2>";
						}
						 else {
							echo "0 results";
						}
	echo"<script>location.href='menus.php'</script>"

?>