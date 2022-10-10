 <?php
	
	try{
		
	$base = new PDO('mysql:host=localhost; dbname=comida', 'root','');
		
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	$base->exec("SET CHARACTER SET utf8");
		
		//echo "conexion exitosa";
		
		
		
		
		
		
	}catch(Exception $e){
		
		die('error'. $e->getLine());
	}
	
	
	?>
