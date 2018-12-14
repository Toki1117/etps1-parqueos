<?php 

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
	<head>
		<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
        <!--<style> <?php //include "bootstrap/dist/css/bootstrap.min.css" ?> </style>-->
        <title>Edificios existentes</title>
        
	</head>
	<body >
		<!--<div class="container-fluid">
			<div class="row">
				<iframe src="menu.php" class="col-sm-12 col-md-12 col-lg-12" style="border:none;height:80px;width:100%"></iframe>
			</div>
		</div>-->
		
		<div class="container">
		<div class="row">
				<nav class="col-sm-3 col-md-3 col-lg-3" style="background:rgba(255, 99, 71, 0.6);border-radius:5px; height:100%;">
					<div class="row">
						<div class="col-sm-3 col-md-3 col-lg-3" style="height:10%;width: 100%;">
							
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<ul class="nav nav-pills nav-stacked text-center" style="" data-spy="affix" data-offset-top="205">
						        <li style="border-bottom:#f0f0f0 1px solid;margin-bottom:15px;"><a href="#" id="ListaEdificios" 
						        	onclick="urlListaEdificios();return false;" >Listado actual</a></li>
						        <li style="border-bottom:#f0f0f0 1px solid;margin-bottom:15px;"><a href="#" id="AgregarEdificios" onclick="urlAgregarEdificios()" >Agregar nuevo</a></li>
						        <li style="border-bottom:#f0f0f0 1px solid;margin-bottom:15px;"><a href="#" id="EditarEdificios" onclick="urlEditarEdificios()">Editar</a></li>
						        <li style="border-bottom:#f0f0f0 1px solid;margin-bottom:15px;"><a href="#" id="EliminarEdificios" onclick="urlEliminarEdificios()">Eliminar edificio</a></li>
						        <li style="border-bottom:#f0f0f0 1px solid;margin-bottom:15px;"><a href="#" id="SubirCuentas" onclick="urlSubirArchivo()" >Subir archivo</a></li>
						    </ul>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3" style="height:10%;width: 100%;">
							
						</div>

					</div>
				</nav>
				<div class="col-sm-9 col-md-9 col-lg-9 " >
					<h3 class="text-center" style="border-bottom:solid 1px #f0f0f0; padding-bottom:15px; color:#404040">Administración de edificios</h3>
					<div class="row">
						<iframe src="listado_edificios.php" id="paginas" class="col-sm-12 col-md-12 col-lg-12" style="border:none;height:80%;"></iframe>
					</div>
				</div>
			</div>
		</div>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/dist/js/direct_to.js" ><?php //include "bootstrap/dist/js/direct_to.js" ?></script>
    	<script src="bootstrap/dist/js/bootstrap.min.js" ><?php //include "bootstrap/dist/js/bootstrap.min.js" ?></script>
    	
	</body>
</html>	