<?php
# valor de conversión
if(isset($_POST["conversion"]) && (is_numeric($_POST["conversion"]) || is_numeric(str_replace(",",".",$_POST["conversion"]))))
{
    $conversion=str_replace(",",".",$_POST["conversion"]);
}else{
    $conversion=0.0463757;
}
 
# valor a convertir
if(isset($_POST["aconvertir"]) && (is_numeric($_POST["aconvertir"]) || is_numeric(str_replace(",",".",$_POST["aconvertir"]))))
{
    $aconvertir=str_replace(",",".",$_POST["aconvertir"]);
}else{
    $aconvertir=0;
}
 
# calculo
$resultado=$conversion*$aconvertir;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conversor de Monedas</title>
 
    <style>
        
        input {text-align:right;}
		
		span{
			text-align: center;
		}
		body{
  background-image: url("https://3dm2so1rw2b43ekza1j8ds5w-wpengine.netdna-ssl.com/wp-content/uploads/2021/06/US-dollar-1-3-1024x683.jpg");
 background-repeat:no-repeat;
  background-position: center center;
  background-size: cover;
	    text-align: center; 	
		
		
		}
    </style>
</head>
 
<body>
    <h1>Conversor de Monedas</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
 
        <span>Valor de conversión</span>
            <input type="text" name="conversion" value="<?php echo $conversion?>">
 
        <br><span>Pesos Mexicanos</span>
            <input type="text" name="aconvertir" value="<?php echo $aconvertir?>"><br>
   <select name="monedas">
   <option value="1">Dolares</option> 
   <option value="2">Euros</option> 
   </select>
        
         <br>  <input type="text" name="resultado" readonly value="<?php echo number_format($resultado,4,".",",")?>">
 
        <p><input type="submit" value="Calcular"></p>
    </form>
</body>
</html>