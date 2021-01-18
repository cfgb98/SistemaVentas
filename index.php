<!DOCTYPE html>
<html lang="MX-es">
    <head>
        <meta charset="utf-8"/>
		<title>Pedidos de Venta</title>
		 <link rel="stylesheet" type="text/css" href="style.css" />
		

    </head>
</html>

<?php 
    session_start();
    include_once "conexion.php";
     
    //BEGINNING FUNCTION TO VERIFY LOGIN
    function verificar_login($user,$password,&$result)
    {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and clave = '$password'";
        $rec = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_object($rec))
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
    //ENDING FUNCTION TO VERIFY LOGIN
    
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
		echo '<script language="javascript">alert("Su usuario es incorrecto, intente nuevamente.");</script>'; 
            }
        }
 
        ?>
    <!-- CPANEL WINDOW BUILDER-->
    <!--div id="cPanel-login">
        <div id="cPanel-title">
            <p>CONTROL PANEL</p>
        </div>
        <!-- LOGIN FORM BUILDER >
        <div id="cPanel-content">
            <form action="" method="POST" class="login">
                
                    <p class="cPanel-data">No. Empleado: </p><input class="cPanel-input" name="user" type="text" placeholder="Número de empleado">
                
                
                    <p class="cPanel-data">Contraseña: </p><input class="cPanel-input" name="password" type="password" placeholder="Contraseña">
                
                    <div class="cPanel-link"><a href="signin.php" >Registrarse</a></div>
                <div>
                    <input class="cPanel-btn"name="login" type="submit" value="ENTRAR">
                </div>
            </form--> 
	<div id="wrapper">	
		<form name="login-form" class="login-form" action="" method="post">
		<div class="header">
		<br><h1>Inicio de Sesión</h1>
		<span>Favor de ingresar tu usuario y contraseña.<br></span>
		</div>
	
		<div class="content">
		<input name="user" type="text" class="input user" placeholder="Nombre de usuario" />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Contraseña" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<input type="submit" name="login" value="Ingresar" class="button" />
		</div>
	
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