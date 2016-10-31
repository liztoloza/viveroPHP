<?php
	session_start();
        if(isset($_POST['commit']))
        {
	$conexion =new mysqli("localhost","root","","vivero");


		if ($_POST) {
	
		$nombre = $_POST["nombre"];
		$precio = $_POST["precio"];
		$cantidad = $_POST["cantidad"];
		$descripcion = $_POST["descripcion"];
		$tipo =$_POST["tipo"];
		}
		$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		if (in_array($_FILES['SubirImagen']['type'], $permitidos) )
    {
		$ruta = "../ImgBDD/";
		$rut = $ruta.basename($_FILES['SubirImagen']['name']);
		$error = $_FILES['SubirImagen']['error'];
		$subido =false;
		if(isset($_POST['commit']) && $error==UPLOAD_ERR_OK) 
		{ 
	   $subido = copy($_FILES['SubirImagen']['tmp_name'], $rut); 
	   
	   $sql="UPDATE `producto` SET `Nombre`='".$nombre."',`Precio`='".$precio."',`Cantidad`='".$cantidad."',`Descripcion`='".$descripcion."',`Id_Tipo`='".$tipo."',`Imagen`='".$rut."',WHERE Id_Proudcto=16 ";

		$conexion->query($sql);
		$id=$conexion->insert_id;
 		echo $rut;
 		echo '<img src="'.$rut.'"/>';
       /* # Mostramos la imagen agregada
        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }*/
    echo "<script language=javascript>
		 alert('Producto Ingresado Exitosamente');
    	</script>";
	}
    else{
    	echo "<script language=javascript>
		 alert('ERROR:El formato de archivo tiene que ser JPG, GIF, BMP o PNG');
    	</script>";
    }
        }
        
   // header("Location: MostrarProduc.php");
    }
?>
