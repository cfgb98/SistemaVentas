<!DOCTYPE html>
<html lang="MX-es">
    <head>

    </head>
</html>

<?php 
 
    session_start();
	session_destroy();
	
    header('location: index.php');
?>