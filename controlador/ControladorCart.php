<?php

class ControladorCart{

	public static function agregar($var){
		
		$GLOBALS['cart'].=$var.",";
		
		$items = explode(',',$GLOBALS['cart']);
		
		foreach ($items as $item) {
		echo $item."<br>";
		}
	}
			
	}
	
	
?>