<!DOCTYPE html>
<html lang="es-MX">
	<head>
	   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <link   href="css/bootstrap.min.css" rel="stylesheet">
	    <script src="js/bootstrap.min.js"></script>
	</head>

	<body>
	    <div class="container">
	    		<div class="row">
	    			<h3>Selecciona tus productos</h3>
	    		</div>
				<div class="row">
					<!--<p>
						<a href="create.php" class="btn btn-success">Agregar un Auto</a>
					</p>-->
					
					<table class="table table-striped table-bordered">
			            <thead>
			                <tr>		                 
			                	<th>Nombre	</th>
	                        	<th>Precio			</th>   
	                        	<th>Stock			</th>                         		                  
			                </tr>
			            </thead>
			            <tbody>
			              	<?php 
						   	include 'database.php';
						   	$pdo = Database::connect();
						   	$sql = 'SELECT * FROM hojas ';
		 				   	foreach ($pdo->query($sql) as $row) {
								echo '<tr>';							   	
	    					   	echo '<td>'. $row['Nombre'] . '</td>';
	                           	echo '<td>'. "$".$row['Precio'] . '</td>';
	                           	echo '<td>'. $row['Stock'] . '</td>';
	                            echo '<td width=250>';
	    					   	echo '<a class="btn" href="read.php?id='.$row['Id'].'">Detalles</a>';
	    					   	echo '&nbsp;';
	    					  	echo '<a class="btn btn-success" href="update.php?id='.$row['Id'].'">Actualizar</a>';
	    					   	echo '&nbsp;';
	    					   	echo '<a class="btn btn-danger" href="delete.php?id='.$row['Id'].'">Eliminar</a>';
	    					   	echo '</td>';
							  	echo '</tr>';
						    }
						   	Database::disconnect();
						  	?>
					    </tbody>
		            </table>
	    	</div>
	    </div> <!-- /container -->
	</body>
</html>