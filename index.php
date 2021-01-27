<!DOCTYPE html>
<html lang="MX-es">
    <head>
        <meta charset="utf-8"/>
		<title>Pedidos de Venta</title>
		 <link rel="stylesheet" type="text/css" href="style.css" />
		 <script src="main.js"></script>
    </head>
</html>

<?php 
    session_start();
    include_once "conexion.php";
     
    
    function verificar_login($user,$password,&$result)
    {
        $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
        mysqli_select_db($con,DB_NAME);
        $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and clave = '$password'";
        $rec = mysqli_query($con,$sql);
        $count = 0;
        while($row = mysqli_fetch_object($rec))
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
 
    
    if(!isset($_SESSION['userid']))
    {
        if(isset($_POST['login']))
        {
            if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
            {
                $_SESSION['userid'] = $result->id_employee;
                $_SESSION['name'] = $result->name;
                $_SESSION['type'] = $result->type;
                if($_SESSION['type'] == "admin")
                    {header("location:homeAdmin.php");}
                else
                    {header("location:pedidos.php");}
            }
            else
            {
		echo '<script>alert("Su usuario es incorrecto, intente nuevamente.");</script>'; 
            }
        }
 
        ?>
	<div id="wrapper">	
		<form name="login-form" class="login-form" action="" method="post">
		<div class="header">
		<br><h1>Inicio de Sesión</h1>
		<span>Favor de ingresar tu usuario y contraseña.<br></span>
		</div>
	
		<div class="content">
		<input name="user" type="text" class="input user" id="user" placeholder="Nombre de usuario" />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" id="password" placeholder="Contraseña" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<input type="submit" name="login" value="Ingresar" class="button" onClick="return validar()" />
		</div>
	<div id="error"></div>
		</form>
    </div>

        
        <?php
        }
        else
        {
            echo 'Su usuario ingreso correctamente.';
            echo '<a href="logout.php">Logout</a>';
        }
        ?>
    </div>