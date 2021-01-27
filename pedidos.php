<!DOCTYPE html>
<html lang="MX-es">
    <head>
        <meta charset="utf-8"/>
		
		 <link rel="stylesheet" type="text/css" href="style.css" />
		 <script src="main.js"></script>
		 <title>Pedidos de Venta</title>
	
    </head>
<body>
  <a id="a" href="logout.php">Salir</a>
  
 <h1 id="h1">Generar Pedido de Venta</h1>
 <br>
		
<form name="pedidos" class="login-form" action="generarxml.php" method="post">
		<div class="content">
		<br>
		<input name="numpedido"  id="numpedido" onkeypress="return soloNum(event)" type="text" class="input indata" placeholder="Número de Pedido: 5000" required>
		<input name="idcliente" id="idcliente" type="text" onkeypress="return soloNum(event)" class="input indata" placeholder="Número de Cliente: 1000" required>
		<input name="cliente" id="cliente" type="text" onkeypress="return soloLetras(event)" class="input indata" placeholder="Cliente: Bimbo" required>
		<input name="idproducto" id="idproducto" onkeypress="return soloNum(event)" type="text" class="input indata" placeholder="Número de Producto: 3000" required>
		<input name="producto" id="producto" onkeypress="return soloLetras(event)" type="text" class="input indata" placeholder="Producto: Mesas" required>
		<input name="cantidad" id="cantidad" onkeypress="return soloNum(event)" type="text" class="input indata" placeholder="Cantidad: 10" required>
		<input name="importe" id="importe" onkeypress="return soloNum(event)" type="text" class="input indata" placeholder="Importe: 1200.00" required>
		</div>
		<div class="footer">
		<input type="submit" name="login" value="Generar XML" class="button"  onClick="return validar()"/>
		</div>
		</form>
		<div id="error"></div>
</body>
</html> 