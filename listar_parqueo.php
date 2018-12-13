<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
	<form action="" method="POST">
	<input type="text" name="nombreParqueo">
	<input type="submit" value="Buscar" >
	</form>

<table   id="table" class="table">
		<tr  class ="" id="titulo">
			<td>Nombre parqueo</td>
			<td>Cantidad</td>
            <td>Reservados</td>
		</tr>


    <?php
		if(isset($_POST['nombreParqueo']))
		{
		$buscar = $_POST['nombreParqueo'];
		$url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/get_parqueo_por_nombre";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "nombreParqueo=$buscar");
		$response = curl_exec($ch);
		$array = json_decode($response, true);
		$cont = count ($array);
		$cont = count ($array);
		
		for ($i = 0; $i< $cont; $i++)
		{
			echo"<tr class =''>";
				echo"<td>",$array[$i]['nombre_parqueo'],"</td>";
                echo"<td>",$array[$i]['cantidad_parqueo'],"</td>";
                echo"<td>",$array[$i]['reservados_parqueo'],"</td>";
			echo"</tr>";
		}
	}else{
		$url = "http://localhost:8080/etps1/ProyectoParqueo/welcome/crud_listar_parqueo";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$array = json_decode($response, true);
		$cont = count ($array);
		for ($i = 0; $i< $cont; $i++)
		{
			echo"<tr class =''>";
            echo"<td>",$array[$i]['nombre_parqueo'],"</td>";
            echo"<td>",$array[$i]['cantidad_parqueo'],"</td>";
            echo"<td>",$array[$i]['reservados_parqueo'],"</td>";
			echo"</tr>";
		}
	}

    ?>
	</table>
</body>
</html>