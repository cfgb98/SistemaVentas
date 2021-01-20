<?php

include_once "pedidos.php";

$numpedido = $_POST['numpedido'];
$idcliente = $_POST['idcliente'];
$cliente = $_POST['cliente'];
$idproducto = $_POST['idproducto'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$importe = $_POST['importe'];


$xml=new DomDocument("1.0","UTF-8");

$raiz=$xml->createElement("pedidos");
$raiz=$xml->appendChild($raiz);

/*primer ITEM--------------------------*/  
$oc=$xml->createElement("Item");
$oc=$raiz->appendChild($oc);


$proveedor=$xml->createElement("numpedido", $numpedido);
$proveedor=$oc->appendChild($proveedor);

$proveedor=$xml->createElement("idcliente", $idcliente);
$proveedor=$oc->appendChild($proveedor);

$numeroOC=$xml->createElement("cliente", $cliente);
$numeroOC=$oc->appendChild($numeroOC);

$proveedor=$xml->createElement("idproducto", $idproducto);
$proveedor=$oc->appendChild($proveedor);

$numeroOC=$xml->createElement("producto", $producto);
$numeroOC=$oc->appendChild($numeroOC);

$proveedor=$xml->createElement("cantidad", $cantidad);
$proveedor=$oc->appendChild($proveedor);

$proveedor=$xml->createElement("importe", $importe);
$proveedor=$oc->appendChild($proveedor);

/*guardar xml--------------------------------*/  
$xml->formatOut=true;

$strings_xml=$xml->saveXML();

if($xml->save("pedidos.xml")){
  echo '<script>alert("Se creado exitosamente el archivo xml.");</script>'; 
  echo '<script>window.location="cargarinfo.php";</script>'; 
  
  
}else{
  echo '<script>alert("No se pudo guardar el archivo xml.");</script>'; 
}


?>
